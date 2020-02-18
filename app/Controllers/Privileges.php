<?php
namespace BRM\Permissions\app\Controllers;

use Illuminate\Http\Request;

class Privileges extends \Illuminate\Routing\Controller
{
    use \BRM\Vivid\app\Traits\Control;

    public function __construct()
    {
        $this->service = \BRM\Permissions\app\Services\Privileges::class;
    }

}
