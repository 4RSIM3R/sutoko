<?php 

namespace App\Service;

use App\Contract\OrganizationContract;
use App\Models\Organization;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Satusehat\Integration\OAuth2Client;

class OrganizationService extends BaseService implements OrganizationContract
{
    protected Model $model;
    protected OAuth2Client $client;

    public function __construct(Organization $model)
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