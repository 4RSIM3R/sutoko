<?php 

namespace App\Service;

use App\Contract\LocationContract;
use App\Models\Location;
use Illuminate\Database\Eloquent\Model;

class LocationService extends BaseService implements LocationContract
{
    protected Model $model;

    public function __construct(Loca $model)
    {
        $this->model = $model;
    }
}