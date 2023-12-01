<?php
class Admin1 extends MY_controller
{
    public function welcome()
    {
        
        $this->load->model('login_model');
        $this->load->library('pagination');
        $page=['base_url'=>base_url('index.php/Admin1/welcome'),
               'per_page'=>4,
               'total_rows'=>$this->login_model->num_rows(),
               'full_tag_open'=>"<ul class='pagination'>",
               'full_tag_close'=>"</ul>",
               'next_tag_open'=>"<li class='page-link'>",
               'next_tag_close'=>"</li>",
               'prev_tag_open'=>"<li class='page-link'>",
               'prev_tag_close'=>"</li>",
               'num_tag_open'=>"<li class='page-link'>",
               'num_tag_close'=>"</li>",
               'cur_tag_open'=>"<li class='page-link active'><a>",
               'cur_tag_close'=>"</a></li>"
               ];
        $this->pagination->initialize($page);
        $data=$this->login_model->articlelist($page['per_page'],$this->uri->segment(3));
        $this->load->view('login_user/dashboard',['data'=>$data]);
    }

    public function deleteartical()
    {
        $id=$this->input->post('id');
        $this->load->model('login_model','delete');
        if($this->delete->del($id))
        {
            $this->session->set_flashdata('msg','Delete successfully');
            $this->session->set_flashdata('msg_class','alert-danger');
        }
        else
        {
            $this->session->set_flashdata('msg','Please try again..!! Not delete');
            $this->session->set_flashdata('msg_class','alert-danger');
        }
        return redirect('Admin1/welcome');
    }
}

?>