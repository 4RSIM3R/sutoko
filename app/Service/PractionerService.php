<?php

namespace App\Service;

use App\Contract\PractionerContract;
use App\Models\Practioner;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Satusehat\Integration\OAuth2Client;

class PractionerService extends BaseService implements PractionerContract
{

    protected Model $model;
    protected OAuth2Client $client;

    public function __construct(Practioner $model)
    {
        $this->model = $model;
        $this->client = new OAuth2Client();
    }

    public function create(array $params, $image = null, ?string $guard = null, ?string $foreignKey = null)
    {
        try {
            DB::beginTransaction();

            [$status, $response] = $this->client->get_by_nik('Practitioner', $params['nik']);

            $response = json_decode(json_encode($response), true);

            if ($status != 200 && !$response->entry) throw new Exception("Invalid response from satusehat api");
            if ($response['entry'] == null) throw new Exception("Practioner with NIK {$params['nik']} not found");

            $resource = $response['entry'][0]['resource'];

            $params['satset_id'] =  $resource['id'];
            $params['name'] = $resource['name'][0]['text'];
            $params['birth_date'] = $resource['birthDate'];
            $params['gender'] = $resource['gender'];
            $params['address'] = sprintf('%s, %s', $resource['address'][0]['line'][0], $resource['address'][0]['city']);

            $model = $this->model->create($params);

            DB::commit();
            return $model->fresh();
        } catch (Exception $exception) {
            DB::rollBack();
            return $exception;
        }
    }
}
