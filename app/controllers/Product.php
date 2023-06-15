<?php

class Product extends Controller {
    public function index()
    {
        $this->view('templates/header');
        $this->view('product/index');
        $this->view('templates/footer');
    }
}