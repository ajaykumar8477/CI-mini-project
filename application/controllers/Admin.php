<?php
class Admin extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('id'))
        {
            return redirect('Admin1/welcome');
        }
    }
    public function login()
    {
        //$this->load->library('form_validation');
  
        $this->form_validation->set_rules('uname','Username','required');
        $this->form_validation->set_rules('pass','Password','required');
        $this->form_validation->set_error_delimiters('<div class ="text-danger">','</div>');
        if($this->form_validation->run())
        
        {
            $uname=$this->input->post('uname');
            $pass=$this->input->post('pass');
             $this->load->model('login_model');
            $q = $this->login_model->data($uname,$pass);
            if($q)
            {
                //$this->load->helper('url');
                $this->load->library('session');
                $this->session->set_userdata('id',$q->id);
                $this->session->set_userdata('user_name',$q->user_name);
                return redirect('Admin1/welcome');
            }
            else
            {
                $this->session->set_flashdata('Login_failed','Invalid Username/Password');
                return redirect('Admin/login');
            }
        }
        else
        { 
           $this->load->view('login_user/login');
        }
     }
            public function register()
            {
                $this->load->view('login_user/register');
            }
           
             public function sendemail()
             {
                $this->form_validation->set_rules('user_name','User Name','required');
                $this->form_validation->set_rules('password','Password','required');
                $this->form_validation->set_rules('email','Email','required|is_unique[user.email]');
                 $this->form_validation->set_error_delimiters('<div class ="text-danger">','</div>');
               if($this->form_validation->run())
               {

                $post=$this->input->post();
                $post['user_type']='user';
                $this->load->model('login_model','user');
                if($this->user->add_user($post))
                {
                    $this->session->set_flashdata('user','User added successfully');
                    $this->session->set_flashdata('user_class','alert-success');
                }
               else
               {
                $this->session->set_flashdata('user','User not added Please try again!!');
                $this->session->set_flashdata('user_class','alert-danger');
               }
               return redirect('Admin/sendemail');
                //$this->load->library('email');
                //$this->email->from(set_value('email'),set_value('user_name'));
                //$this->email->to("ajayrana12@gmail.com");
                //$this->email->subject("Registration Greeting...");

                //$this->email->message("Thank You for Registration");
                //$this->email->set_newline("\r\n");
                //$this->email->send();
                //if(!$this->email->send()){
                  //  show_error($this->email->print_debugger());}
                    //else{
                      //  echo "Your email has been sent";
                       // }
                }
               else
               {
                $this->load->view('login_user/register');
               }
             }
}

?>