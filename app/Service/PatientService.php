<?php

namespace App\Service;

use App\Contract\PatientContract;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;

class PatientService extends BaseService implements PatientContract
{
    protected Model $model;

    public function __construct(Patient $model)
    {
        $this->model = $model;
    }
}
