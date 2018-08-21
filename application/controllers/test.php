<?php 
   class Test extends CI_Controller {
  
      public function index() { 
         $this->load->view('test');
      } 

      public function signup() { 
        $this->load->view('signup');
      } 
   } 
?>