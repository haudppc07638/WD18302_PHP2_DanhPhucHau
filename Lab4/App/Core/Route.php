<?php

namespace App\Core;

class Route
{
    public $url;
    public $nameController = "AdminController";
    public $nameMethod = "home";
    public $path = 'App\Controllers\\';
    public $controller;

    function __construct()
    {
        $this->request();
        $this->renderController();
        $this->renderMethod();
    }

    function request()
    {
        $this->url = isset($_GET['url']) ? $_GET['url'] : null;

        if ($this->url != null) {
            $this->url = rtrim($this->url, '/');
            $this->url = explode('/', filter_var($this->url, FILTER_SANITIZE_URL));
        } else {
            unset($this->url);
        }
    }

    function renderController()
    {
        if (!isset($this->url[0])) {
            $className = $this->path . $this->nameController;
            $this->controller = new $className;
        } else {
            $this->nameController = $this->url[0];
            $file = __DIR__ . '/../Controllers/' . $this->nameController . '.php';

            if (file_exists($file)) {
                require_once $file;
                $className = $this->path . $this->nameController;

                if (class_exists($className)) {
                    $this->controller = new $className;
                } else {
                    $this->redirectToError();
                }
            } else {
                $this->redirectToError();
            }
        }
    }

    function renderMethod()
    {
        if (isset($this->url[1])) {
            $this->nameMethod = $this->url[1];

            if (method_exists($this->controller, $this->nameMethod)) {
                $parameters = isset($this->url[2]) ? $this->url[2] : null;
                $this->controller->{$this->nameMethod}($parameters);
            } else {
                $this->redirectToError();
            }
        } else {
            if (method_exists($this->controller, $this->nameMethod)) {
                $this->controller->{$this->nameMethod}();
            }
        }
    }

    function redirectToError()
    {
        // header('Location:' . ROOT_URL . 'HomeController/Error');
        exit();
    }
}
