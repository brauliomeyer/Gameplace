<?php



    //Load the right header content
    $this->load->view('lay-out/include/header');

    //Display the Main content
    $this->load->view($main_content);
    
 
    //Load the right footer content
    $this->load->view('lay-out/include/footer');






?>