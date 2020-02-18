<?php

namespace BRM\Permissions\app\Models;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    use \BRM\Vivid\app\Traits\Model;

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $hidden = [];

    protected $dates = [
      'createdAt',
      'updatedAt',
      'deletedAt'
    ];

    public function permissions(){
      return $this->belongsToMany(\BRM\Permissions\app\Models\Permission::class, 'privilegePermissions', 'roleId', 'privilegeId');
    }

}
