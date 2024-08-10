<?php

namespace App\Service;

use App\Contract\EncounterContract;
use App\Models\Encounter;
use App\Models\Location;
use App\Models\Patient;
use App\Models\Practioner;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Satusehat\Integration\FHIR\Condition;
use Satusehat\Integration\FHIR\Encounter as FHIREncounter;
use Satusehat\Integration\OAuth2Client;
use Illuminate\Support\Str;
use Satusehat\Integration\FHIR\Bundle;

class EncounterService extends BaseService implements EncounterContract
{
    protected Model $model;
    protected OAuth2Client $client;

    public function __construct(Encounter $model)
    {
        $this->model = $model;
        $this->client = new OAuth2Client();
    }


    public function create(array $params, $image = null, ?string $guard = null, ?string $foreignKey = null)
    {


        try {
            $encounter_id = Str::uuid();
            $condition_id = Str::uuid();
            $now = Carbon::now();
            $patient = Patient::query()->where('satset_id', $params['patient_id'])->first();
            $practioner = Practioner::query()->where('satset_id', $params['practitioner_id'])->first();
            $location = Location::query()->where('satset_id', $params['location_id'])->first();

            $encounter = new FHIREncounter();
            $encounter->addRegistrationId($encounter_id);

            $encounter->setArrived(Carbon::now()->subMinutes(15)->toDateTimeString());
            $encounter->setInProgress(Carbon::now()->subMinutes(5)->toDateTimeString(), Carbon::now()->toDateTimeString());
            $encounter->setFinished(Carbon::now()->toDateTimeString());

            $encounter->setConsultationMethod('RAJAL');
            $encounter->setSubject($patient->satset_id, $patient->name);
            $encounter->addParticipant($practioner->satset_id, $practioner->name);
            $encounter->addLocation($location->satset_id, $location->name);

            $condition = new Condition();
            $condition->addCategory('diagnosis');
            $condition->addCode($params['icd_10']);
            $condition->setSubject($patient->satset_id, $patient->name);
            $condition->setEncounter($condition_id); // ID SATUSEHAT Encounter
            $condition->setOnsetDateTime($now->subMinutes(2)->toDateTimeString());
            $condition->setRecordedDate($now->subMinutes(1)->toDateTimeString());

            $bundle = new Bundle();
            $bundle->addEncounter($encounter);
            $bundle->addCondition($condition);

            [$status, $response] = $bundle->post();

            dd($status, $response);
        } catch (Exception $exception) {
            DB::rollBack();
            return $exception;
        }
    }
}
