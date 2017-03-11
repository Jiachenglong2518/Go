<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pc extends CI_Controller {
    //构造函数
    public function __construct()
    {
        parent::__construct();
        $this -> load -> model("pc_model");
    }
    //PC首页
    public function index()
    {
        $this->load->view('index.php');
    }
    //登陆界面
    public function login()
    {
        $image = $this -> captcha();
        $this->load->view('login.php',array('image'=>$image));
    }
    //用户登陆
    public function check_login(){
        $this->load->view('login');
        $submit = $this -> input -> post("submit");
        if($submit){
            $username = $this -> input -> post("username");
            $password = $this -> input -> post("password");
            $row = $this -> pc_model -> check_login($username,$password);
            if($row){
                $this->session->set_userdata(array(
                    "userinfo" => $row
                ));
                redirect('pc/index');
            }else{
                redirect('pc/login');
            }
        }
    }
    //用户注销
    public function logout(){
        $this->session->unset_userdata('userinfo');
        redirect("pc/index");
    }
    //注册界面
    public function register()
    {
        $image = $this -> captcha();
        $this->load->view('register.php',array('image'=>$image));
    }
    //用户注册
    public function check_register(){
        /*$this->load->view('register');*/
        $submit = $this -> input -> post("submit");
        if($submit){
            $username = $this -> input -> post("username");
            $password = $this -> input -> post("password");
            $status = $this -> input -> post("status");
            $row = $this -> pc_model -> check_register($username,$password,$status);
            if($row){
                    $this->load->view('login');
                    $submit = $this -> input -> post("submit");
                    if($submit){
                        $username = $this -> input -> post("username");
                        $password = $this -> input -> post("password");
                        $row = $this -> pc_model -> check_login($username,$password);
                        if($row){
                            $this->session->set_userdata(array(
                                "userinfo" => $row
                            ));
                            redirect('pc/index');
                        }else{
                            redirect('pc/login');
                        }
                    }
            }else{
                echo "注册失败!";
            }
        }
    }
    //Ajax检查用户名是否存在
    public function check_username()
    {
        $username = $this -> input -> get ("username");
        $row = $this -> pc_model -> get_by_username($username);
        if($row){
            echo "success";
        }else{
            echo "fail";
        }
    }
    //验证码
    public function captcha()
    {
        $this->load->helper('captcha');
        $vals = array(
            'word' => rand(1000,9999),
            'img_path' => './captcha/',
            'img_url' => base_url().'/captcha/',
            'font_path' => './system/fonts/texb.ttf',
            'font-size'=>20,
            'img_width' => '100',
            'img_height' => 35,
            'expiration' => 60,
            'colors'	=> array(
                'background'	=> array(255,255,255),
                'border'	=> array(153,102,102),
                'text'		=> array(204,153,153),
                'grid'		=> array(192,192,192)
            )
        );
        $this->session->set_userdata("captcha",$vals['word']);
        $cap = create_captcha($vals);
        return $cap['image'];
    }
    //刷新验证码
    public function show_captcha()
    {
        echo $this->captcha();
    }
    //验证验证码
    public function check_captcha(){
        $this -> session -> userdata("captcha");
    }
    //修改密码
    public function update_password(){
        $username = $this -> input -> post("username");
        $password = $this -> input -> post("password");
        $row = $this -> pc_model -> update_password($username,$password);
        if($row){
            redirect('pc/login');
        }else{
            echo "修改失败！";
        }
    }
    //忘记密码界面
    public function forget_password()
    {
        $image = $this -> captcha();
        $this->load->view('forget_password.php',array('image'=>$image));
    }
    //我的收藏
    public function my_collect()
    {
        $this->load->view('my_collect.php');
    }
    //搜索导师
    public function find_teacher()
    {
        $res = $this->pc_model->teacher_information();
        $res0 = $this->pc_model->position();
        $this->load->view('find_teacher.php',array("teacher_information"=>$res,"position"=>$res0));

    }
    //发布内推
    public function fabuneitui(){
        $this->load->view('fabuneitui');
    }
    //内推订单
    public function push_order(){
        $this->load->view('push_order');
    }
    //内推订单mask
    public function push_order_mask(){
        $this->load->view('push_order_mask');
    }
    //成为导师
    public function become_teacher(){
        $this->load->view('become_teacher');
    }
    //内推部简历弹出层
    public function push_resume(){
        $this->load->view('push_resume');
    }
    //导师里提示界面
    public function tishi(){
        $this->load->view('tishi');
    }
    //导师里内推簿界面
    public function neituibu(){
        $this->load->view('neituibu');
    }
    //求职者里用户中心界面
    public  function applyuser(){
        $this->load->view('applyuser');
    }
    //导师里的用户中心界面
    public  function usercenter(){
        $this->load->view('usercenter');
    }
    //导师里明星内推界面
    public function starneitui(){
        $this->load->view('starneitui');
    }
    //导师里的面试管详情页面
    public function interviewer_detail(){
        $this->load->view('interviewer_detail');
    }
    //导师里的内退详情页面
    public function push_detail(){
        $this->load->view('push_detail');
    }
    //导师里的学生反馈界面
    public function student_feedback(){
        $this->load->view('student_feedback');
    }
    //成为内推
    public function push_order_index(){
        $res = $this->pc_model->teacher_information();
        $this->load->view('push_order_index',array("order_info"=>$res));
    }
    public function info_center(){
        $this->load->view('info_center');
    }
    public function user_setting(){
        $this->load->view('user_setting');
    }
    public function cancellation_request_reason(){
        $this->load->view('cancellation_request_reason');
    }

}
