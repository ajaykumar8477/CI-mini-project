<?php
class Add_Article extends CI_controller
   { 
      public function adduser()
            {
                $this->load->view('login_user/add_article');
                $this->input->post();
                
            }
            public function uservalidation()
            {
                 //print_r($this->input->post()); exit;
                $this->form_validation->set_error_delimiters('<div class ="text-danger">','</div>');
                if($this->form_validation->run('add_article_rule'))
                {
                    $post=$this->input->post();
                    $this->load->model('login_model','useradd');
                    if($this->useradd->add($post))
                    {
                        $this->session->set_flashdata('msg','Articals added successfully');
                        $this->session->set_flashdata('msg_class','alert-success');
                    }
                    else
                    {
                        $this->session->set_flashdata('msg','Articals not added Please try again!!');
                        $this->session->set_flashdata('msg_class','alert-danger');
                    }
                    return redirect('Admin1/welcome');
                }
                else
                {
                    $this->load->view('login_user/add_article');
                }
                
            }
   }
  ?>          