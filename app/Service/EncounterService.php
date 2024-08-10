<?php

namespace App\Service;

use App\Contract\EncounterContract;
use App\Models\Encounter;
use Illuminate\Database\Eloquent\Model;

class EncounterService extends BaseService implements EncounterContract
{
    protected Model $model;

    public function __construct(Encounter $model)
    {
        $this->model = $model;
    }
}
