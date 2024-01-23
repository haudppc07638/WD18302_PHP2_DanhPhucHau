<?php

namespace App\Controllers;

use App\Core\Render;


class BaseController
{
    protected $load;
    function __construct()
    {
        $this->load = new Render();
    }

    public function  redirect($url, $refresh = null): void
    {
        header('location:' . $url);
    }
}
