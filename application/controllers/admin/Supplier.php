<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Supplier_model");
        echo "lah lah";
    }
    public function index()
    {
        $data["Supplier"] = $this->Supplier_model->getAll();
        $this->load->view("admin/Supplier/list",$data);
    }
}