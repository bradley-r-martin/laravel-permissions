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

    public function store($data = [])
    {
        $this->hook('afterSave', function () {
            if (class_exists('\BRM\Roles\FrameworkServiceProvider')) {
                if (isset($this->data['roles'])) {
                    $this->record->roles->sync($this->data['roles']);
                }
            }
        });
        return $this->vivid('store', $data);
    }

    public function update($data = [])
    {
        $this->hook('afterSave', function () {
            if (class_exists('\BRM\Roles\FrameworkServiceProvider')) {
                if (isset($this->data['roles'])) {
                    $this->record->roles->sync($this->data['roles']);
                }
            }
        });
        return $this->vivid('update', $data);
    }
}
