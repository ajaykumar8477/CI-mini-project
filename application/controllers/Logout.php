<?php 
class Logout extends CI_controller
{
    public function index()
    {
        $this->session->unset_userdata('id');
        return redirect('Admin/login');
    }
}

?>