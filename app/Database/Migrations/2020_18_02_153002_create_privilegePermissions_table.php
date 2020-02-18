<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivilegePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privilegePermissions', function (Blueprint $table) {

          $table->integer('privilegeId')->unsigned();
          $table->integer('permissionId')->unsigned();
         
          //FOREIGN KEY CONSTRAINTS
          $table->foreign('privilegeId')->references('id')->on('privileges')->onDelete('cascade');
          $table->foreign('permissionId')->references('id')->on('permissions')->onDelete('cascade');
         
          //SETTING THE PRIMARY KEYS
          $table->primary(['privilegeId','permissionId']);
          $table->timestamp('createdAt')->useCurrent();
          $table->timestamp('updatedAt')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('privilegePermissions');
    }
}
