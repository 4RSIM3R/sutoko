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
            
        } catch (Exception $exception) {
            DB::rollBack();
            return $exception;
        }
    }

}
