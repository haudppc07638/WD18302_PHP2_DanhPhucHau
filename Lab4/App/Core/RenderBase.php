<?php

namespace App\Core;

use App\Controllers\BaseController;
use App\Models\Users;

class RenderBase extends BaseController{
    private Users $_users;
    public function __construct()
    {
        $data = [];
        parent::__construct();
        $this->_users = new Users();
    }

    /**
     * @throws Exception
     */
    public function renderStylesheet(){
        $this->load->render('admin/layouts/stylesheet');
    }

    public function renderHeader(){
        $data = [
            // 'users' => $this->_users->getUsers()
        ];
        
        $this->load->render('admin/layouts/header', $data);
    }
    /**
     * @throws Exception
     */
    public function renderMenu(){
        $this->load->render('admin/layouts/menu');
    }

    public function renderMain(){
        $this -> load -> render('admin/pages/listproducts');
    }

    public function renderAddPro(){
        $this -> load -> render('admin/pages/addproducts');
    }

    public function renderFooter(){
        
        $this->load->render('admin/layouts/footer');
    }

    public function renderJquery(){
        $this->load->render('admin/layouts/jquery');
    }
}