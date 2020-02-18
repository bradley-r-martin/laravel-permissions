<?php

namespace BRM\Permissions\app\Services;

use Validator;
use JWTAuth;
use Exception;

class Permissions
{
    use \BRM\Vivid\app\Traits\Vivid;
    public function __construct()
    {
        $this->model = \BRM\Permissions\app\Models\Permission::class;
        $this->fields = [
          'name',
          'group',
          'description'
        ];
        $this->sanitise = [
          'name'=> ['string'],
          'group'=> ['string'],
          'description'=> ['string']
        ];
    }
}
