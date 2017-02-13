<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#权限控制器
class Privilege extends CI_Controller  {
    public function __construct()
    {
        parent::__construct();//调用父类构造函数
        $this->load->helper('captcha');//加载图片验证码辅助函数

    }

    public function login(){
        $this->load->view('login.html');
    }
    #生产验证码
    public function code(){
        #调用函数生成验证码
        $vals=array(
            'word'=>rand(1000,9999)
        );
        create_captcha($vals);
    }

}
