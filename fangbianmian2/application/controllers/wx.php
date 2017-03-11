<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wx extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pc_model");
    }

    public function sel_tea()
	{
		$this->load->view('mobile/selectTeacher.php');
	}
	public function myCol_tea()
	{
		$this->load->view('mobile/myCollection_teacher.php');
	}
	public function myCol_push()
	{
		$this->load->view('mobile/myCollection_push.php');
	}
    public function starpush()
    {
        $this->load->view('mobile/star_push.php');
    }
    public function pushbook()
    {
        $this->load->view('mobile/push_book.php');
    }
    public function resumeModify()
    {
        $this->load->view('mobile/myResume_modify.php');
    }
    public function resumeModifyWork()
    {
        $this->load->view('mobile/myResume_modify_work.php');
    }
    public function resumeModifySchool()
    {
        $this->load->view('mobile/myResume_modify_school.php');
    }
    public function becomeTeacher()
    {
        $this->load->view('mobile/become_teacher.php');
    }
    public function releasePush()
    {
        $this->load->view('mobile/release_push.php');
    }
    public function releaseInterview()
    {
        $this->load->view('mobile/release_interview.php');
    }
    public function mesPrompt()
    {
        $this->load->view('mobile/message_prompt.php');
    }
    public function noorder()
    {
        $this->load->view('mobile/no_order.php');
    }
    public function pushorder1()
    {
        $this->load->view('mobile/push_order1.php');
    }
    public function pushorder2()
    {
        $this->load->view('mobile/push_order2.php');
    }
    public function pushorder3()
    {
        $this->load->view('mobile/push_order3.php');
    }
    public function pushorder4()
    {
        $this->load->view('mobile/push_order4.php');
    }
    public function pushorder5()
    {
        $this->load->view('mobile/push_order5.php');
    }
    public function bookingorder1()
    {
        $this->load->view('mobile/booking_order_details1.php');
    }
    public function bookingorder2()
    {
        $this->load->view('mobile/booking_order_details2.php');
    }
    public function bookingorder3()
    {
        $this->load->view('mobile/booking_order_details3.php');
    }
    public function bookingorder4()
    {
        $this->load->view('mobile/booking_order_details4.php');
    }
    public function bookingorder5()
    {
        $this->load->view('mobile/booking_order_details5.php');
    }
    public function msgCenter()
    {
        $this->load->view('mobile/message_center.php');
    }
    public function stu_ass()
    {
        $this->load->view('mobile/interviewer_details_stu_ass.php');
    }





    public function index()
    {
        $this->load->view('mobile/index');
    }
    public function student_appraise()
    {
        $this->load->view('mobile/student_appraise');
    }
    public function student_cancel_reason()
    {
        $this->load->view('mobile/student_cancel_reason');
    }
    public function upload_audio()
    {
        $this->load->view('mobile/upload_audio');
    }
    public function user_center()
    {
        $this->load->view('mobile/user_center');
    }
    public function submit_offer()
    {
        $this->load->view('mobile/submit_offer');
    }
    public function mobile_regist(){
        $this->load->view('mobile/mobile_regist');
    }
    //ajax检查用户名
    public  function check_username(){
        $username  = $this -> input ->get ("username");
        $row = $this->pc_model -> get_by_username($username);
        if($row){
            echo "success";
        }else{
            echo "fail";
        }
    }
    //检查注册
    public function check_regist(){
        $submit = $this->input->post("submit");
        if($submit){
            $uname = $this->input->post("tel");
            $password = $this->input->post("password");
            $status = $this -> input -> post("status");
            $row = $this->pc_model->check_register($uname,$password,$status);
            var_dump($status);
            if($row>0){
                redirect('wx/mobile_login');
            }else{
                redirect('wx/mobile_regist');
            }
        }
    }
    public function mobile_login(){
        $this->load->view('mobile/mobile_login');
    }
    //检查登录
    public function checked_login(){
        $submit = $this->input->post("submit");
        if($submit){
            $email = $this->input->post("email");
            $pwd = $this->input->post("password");
        }
        $row = $this ->pc_model->check_login($email,$pwd);
        if($row){
            $this->session->set_userdata(array(
                "userinfo"=>$row
            ));
            redirect('wx/index');
        }else{
            redirect("wx/mobile_login");
        }
    }
    //修改密码
    public function update_password(){
        $username = $this -> input -> post("email");
        $password = $this -> input -> post("password");
        $row = $this -> pc_model -> update_password($username,$password);
        if($row>0){
            redirect('wx/mobile_login');
        }else{
            echo "修改失败！";
        }
    }
    public function mobile_forget_pwd(){
        $this->load->view('mobile/mobile_forget_pwd');
    }
    public function mobile_payment(){
        $this->load->view('mobile/mobile_payment');
    }
    public function mobile_interpolate_orderdetail(){
        $this->load->view('mobile/mobile_interpolate_orderdetail');
    }
    public function mobile_booking_orderdetails(){
        $this->load->view('mobile/mobile_booking_orderdetails');
    }
    public function mobile_interpolate_process(){
        $this->load->view('mobile/mobile_interpolate_process');
    }
    public function mobile_interpolate_detail(){
        $this->load->view('mobile/mobile_interpolate_detail');
    }
    public function mobile_interviewer_detail(){
        $this->load->view('mobile/mobile_interviewer_detail');
    }
    public function mobile_my_resume(){
        $this->load->view('mobile/mobile_my_resume');
    }
    public function mobile_teacher_resume(){
        $this->load->view('mobile/mobile_teacher_resume');
    }
}
