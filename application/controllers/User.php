<?php

class User extends CI_controller
{
    public function list()
    {
        
        $this->load->library('test');
        //$this->test->show();
        //$this->load->model('Usermodel');
       $data['user']=$this->Usermodel->get();
        $this->load->view('user/userlist',$data);

    }
    //echo br(3);
    
}
 
?>