<?php
class Update_Article extends CI_controller
{
    public function update($id)
      { 
        $this->load->model('login_model');
        $data=$this->login_model->findartical($id);
        //print_r($data);
        //exit;
        $this->load->view('login_user/update_artical',['artical'=>$data]);
      }
       public function updateartical()
        {
           // print_r($this->input->post());
           // exit;
            if($this->form_validation->run('add_article_rule'))
              {
                $post=$this->input->post();
                $articalid=$post['art_id'];
                unset($post['art_id']);
                $this->load->model('login_model');
                if($this->login_model->update_artcal($articalid,$post))
                {
                    $this->session->set_flashdata('msg','Articals update successfully');
                    $this->session->set_flashdata('msg_class','alert-success');
                }
                else
                {
                    $this->session->set_flashdata('msg','Articals not update Please try again!!');
                    $this->session->set_flashdata('msg_class','alert-danger');
                }
                return redirect('Admin1/welcome');
              }
            else
              {
                $this->load->view('login_user/update_artical');
              }
        }
}



?>
