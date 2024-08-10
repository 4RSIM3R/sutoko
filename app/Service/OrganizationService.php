<?php 

namespace App\Service;

use App\Contract\OrganizationContract;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Model;

class OrganizationService extends BaseService implements OrganizationContract
{
    protected Model $model;

    public function __construct(Organization $model)
    {
        $this->model = $model;
    }
}