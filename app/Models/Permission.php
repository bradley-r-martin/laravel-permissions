<?php

namespace BRM\Permissions\app\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
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

    public function role()
    {
      if (class_exists('\BRM\Roles\FrameworkServiceProvider')) {
          return $this->belongsToMany(\BRM\Roles\app\Models\Role::class, 'rolePermission', 'permissionId', 'roleId');
      }
      return null;
    }

}
