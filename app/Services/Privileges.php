<?php

namespace BRM\Permissions\app\Services;

use Validator;
use JWTAuth;
use Exception;

class Privileges
{
    use \BRM\Vivid\app\Traits\Vivid;
    public function __construct()
    {
        $this->model = \BRM\Permissions\app\Models\Privilege::class;
        $this->fields = [
          'name'
        ];
        $this->sanitise = [
          'name'=> ['string']
        ];
    }
}
