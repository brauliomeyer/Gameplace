<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller
{
        public function index()
        {
            //Decleare data vars
            $data['products'] = $this->Product_model->get_products();
            $data['main_content'] = 'products'; 
            
            //Load products view
            $this->load->view('lay-out/main',$data);
        }
    public function details($id) 
    {
        //Get the Product details
        $data['product'] = $this->Product_model->get_product_details($id);
        
        //Load View
        $data['main_content'] = 'details';
        $this->load->view('lay-out/main', $data);
    }

}






?>