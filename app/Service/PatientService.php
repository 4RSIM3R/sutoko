<?php

namespace App\Service;

use App\Contract\PatientContract;
use App\Models\Patient;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Satusehat\Integration\OAuth2Client;

class PatientService extends BaseService implements PatientContract
{
    protected Model $model;
    protected OAuth2Client $client;

    public function __construct(Patient $model)
    {
        $this->model = $model;
        $this->client = new OAuth2Client();
    }

    public function create(array $params, $image = null, ?string $guard = null, ?string $foreignKey = null)
    {

        try {
            DB::beginTransaction();

            [$status, $response] = $this->client->get_by_nik('Patient', $params['nik']);

            $response = json_decode(json_encode($response), true);

            if ($status != 200 && !$response->entry) throw new Exception("Invalid response from satusehat api");
            if ($response['entry'] == null) throw new Exception("Patient with NIK {$params['nik']} not found");

            $resource = $response['entry'][0]['resource'];

            $params['satset_id'] =  $resource['id'];
            $params['name'] = $resource['name'][0]['text'];

            $model = $this->model->create($params);

            DB::commit();
            return $model->fresh();
        } catch (Exception $exception) {
            DB::rollBack();
            return $exception;
        }
    }
}
