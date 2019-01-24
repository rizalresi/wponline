<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class administrator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("wp_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["wp"] = $this->wp_model->getAll();
        $this->load->view("admin/list", $data);
    }

    public function add()
    {
        $wp = $this->wp_model;
        $validation = $this->form_validation;
        $validation->set_rules($wp->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("admin/product/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->wp_model->delete($id)) {
            redirect(site_url('admin'));
        }
    }
}