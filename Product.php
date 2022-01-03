<?php
class Product extends CI_Controller {

    public function index()
    {
        $this->load->view("product_page");

    }

    public function catalog()
    {
        $this->load->view("product_catalog");
    }
        
}


