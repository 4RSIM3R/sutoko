<?php

namespace App\Service;

use App\Contract\LocationContract;
use App\Models\Location;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Satusehat\Integration\FHIR\Location as FHIRLocation;
use Satusehat\Integration\OAuth2Client;
use Illuminate\Support\Str;

class LocationService extends BaseService implements LocationContract
{
    protected Model $model;
    protected OAuth2Client $client;

    public function __construct(Location $model)
    {
        $this->model = $model;
        $this->client = new OAuth2Client();
    }

    public function create(array $params, $image = null, ?string $guard = null, ?string $foreignKey = null)
    {
        $id = Str::uuid();
        $location = new FHIRLocation();
        $location->addPhysicalType($params['type']);
        $location->setManagingOrganization(env('ORGID_PROD'));
        $location->setName($params['name']);
        $location->addIdentifier($id);

        try {
            DB::beginTransaction();

            [$status, $response] = $location->post();
            $response = json_decode(json_encode($response), true);

            if ($status != 201) throw new Exception("Invalid response from satusehat api");

            $payload['name'] = $response['description'];
            $payload['reference'] = $response['managingOrganization']['reference']; 
            $payload['type'] = $response['physicalType']['coding'][0]['code'];
            $payload['satset_id'] = $response['id'];

            $model = $this->model->create($payload);

            DB::commit();
            return $model->fresh();
        } catch (Exception $exception) {
            DB::rollBack();
            return $exception;
        }
    }
}
