<?php
class Pc_model extends CI_Model
{
    //用户验证
    public function check_login($username,$password){
        return $this->db->get_where("t_user", array(
            "tel" => $username,
            "password" => $password
        ))->row();
    }
    //验证用户名是否存在
    public function get_by_username($username)
    {
        return $this->db->get_where("t_user", array(
            "tel" => $username
        ))->row();
    }
    //用户注册
    public function check_register($username,$password,$status){
        $this -> db -> insert("t_user", array(
            "tel" => $username,
            "password" => $password,
            "status" => $status
        ));
        return $this->db->affected_rows();
    }
    //修改密码
    public function update_password($username,$password){
        $this -> db -> where("tel",$username);
        $this -> db -> update("t_user",array(
            "password" => $password
        ));
        return $this -> db ->affected_rows();
    }
    //导师姓名及面试职位
    public function teacher_information(){
        $sql="select * from t_recommend ,t_user
              where t_recommend.user_id =t_user.user_id
              ";
        return $this->db->query($sql)->result();
    }
    //职位列表
    public function position(){
        $spl ="select * from t_position";
        return $this->db->query($spl)->result();
    }
}