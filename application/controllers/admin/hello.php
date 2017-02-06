<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hello extends Admin_Controller {
    public function index(){
        $data['title']="ci框架";
        $data['content']="ci框架小巧";
        $this->load->view('hello.html',$data);
    }
}
