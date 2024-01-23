<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\RenderBase;
use App\Models\Admin;

class ProController extends BaseController
{
    private $_model;
    private $_renderBase;

    function __construct()
    {
        parent::__construct();

        $this->_model = new Admin();
        $this->_renderBase = new RenderBase();
    }

    function listProducts()
    {
        $this->renderCommonParts();
        $this->_renderBase->renderMain();
        $this->_renderBase->renderFooter();
    }

    function addProducts()
    {

        $this->renderCommonParts();
        $this->_renderBase->renderAddPro();
        $this->_renderBase->renderFooter();
    }

    private function renderCommonParts()
    {
        $this->_renderBase->renderStylesheet();
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderMenu();
    }
}
