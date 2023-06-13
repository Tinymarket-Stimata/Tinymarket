<?php

class App {
    // Set default
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        //controller
        $url = $this->parseURL();
        if (file_exists('..app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]); 
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // method
        if (isset($url[1])) {
            if (method_exists($this->conroller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    // routing
    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); //hapus slash pada url
            $url = filter_var($url, FILTER_SANITIZE_URL); //menghilangkan karakter yang tidak diinginkan pada url
            $url = explode('/', $url); //pecah berdasarkan slash pada url
            return $url;
        }
    }

}