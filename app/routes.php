<?php

$endpoints = [
  'except' => ['create', 'edit','destroy','head']
];


Route::resource('api/1.0/permissions', 'BRM\Permissions\app\Controllers\Permissions', $endpoints);
