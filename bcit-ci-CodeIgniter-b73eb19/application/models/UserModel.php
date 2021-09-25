<?php
class UserModel extends CI_model{

    public function getUserdata(){
        /*** 
        return[

            ['Firstname'=>'Ajay Suneja' , 'AccountNO' =>'981234'],
            ['Firstname'=>'Ajay sharma' , 'AccountNO' =>'123456'],

        ];
        */

        //for database 
        $this->load->database();
      //  $q = $this->db->query("select * from  user");
      //  $q = $this->db->select("Firstname");
          $q = $this->db->where("id",2);
          $q = $this->db->get("user");
        $result = $q->result();
        return $result;
       // echo"<pre>";
        ///print_r($result);
    }
}
?>