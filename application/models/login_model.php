<?php
class login_model extends CI_model
{
    public function data($username,$password)
    {
       
        $data= $this->db->select('id,user_name')->where(['user_name'=>$username,'password'=>$password])
                    ->get('user')->row();
                   // echo "<pre>";
                   // print_r($data->row()->id);
                    //exit;
             if($data)
             {
                return $data;
             }
             else
             {
                return false;
             }
         }
             public function articlelist($limit, $offset){
               $id=$this->session->userdata('id');
               $data=$this->db->where(['id'=>$id])->get('user');
               $row=$data->row();
               $type=$row->user_type;
               // echo"<pre>";
               //print_r($row->user_type);
               //print_r($result[0]->user_type);
               //exit;
                  if($type=='admin')
                  {
                     $q=$this->db->select()
                     ->from('articals')
                     ->limit($limit,$offset)
                     ->get();           
                  }
                  else
                  {
                     $q=$this->db->select()
                              ->from('articals')
                              ->where(['user_id'=>$id])
                              ->limit($limit,$offset)
                              ->get();
                                                   
                  }
                  return  $q->result();

             
             }

              public function add($array)
              {
               return $this->db->insert('articals',$array);
              }
              
              public function add_user($array)
              {
               //echo"<pre>";
               //print_r($array);
               //exit;
               return $this->db->insert('user',$array);
              }
              public function del($id)
              {
              // echo"<pre>";
              // print_r($id);
               //exit;
               return $this->db->delete('articals',['id'=>$id]);
              }
             //row conut for pagination start
             public function num_rows()
             {
               $id=$this->session->userdata('id');
               $data=$this->db->where(['id'=>$id])->get('user');
               $row=$data->row();
               $type=$row->user_type;
                  if($type=='admin')
                  {
                     $q=$this->db->select()
                     ->from('articals')
                     ->get(); 
                     return $q->num_rows();          
                  }
                  else
                  {
                     $q=$this->db->select()
                              ->from('articals')
                              ->where(['user_id'=>$id])
                              ->get();

                        return $q->num_rows();                           
                  }
             }
            // row conut for pagination close
            // updata part
             public function findartical($articleid)
              {
                $q=$this->db->select(['id','artical_title','artical_body'])
                       ->where('id',$articleid)
                       ->get('articals');
                       return $q->row();
              }
              public function update_artcal($articalid, Array $artical)
              {
                return $this->db->where('id',$articalid)
                            ->update('articals',$artical);
              }
              //update part close
}

?>