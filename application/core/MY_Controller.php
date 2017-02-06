<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//定义前台总控制器
class Home_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        #开启皮肤功能
        $this->load->switch_themes_on();
    }
}
//定义后台总控制器
class Admin_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        #关闭皮肤功能
        $this->load->switch_themes_off();
    }
}
//定义后台总控制器