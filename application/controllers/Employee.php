<?php
class Employee extends CI_Controller
{
    public function index()
    {
        $this->load->helper("html");
        $this->load->view('employee/user');
       
    }
}

?>
