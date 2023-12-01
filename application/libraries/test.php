<?php
class Test {

    public function show()
    {
        $ci=&get_instance();
        $ci->load->helper('array');
        $array=['ABC'=>'abc','XYZ'=>'xyz'];
        //echo element('ABC',$array,'Not Found');
        echo "the function will provide";
    }
}


?>