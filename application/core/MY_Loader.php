<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader {
    protected $_theme='default/';//默认模板
    #开始皮肤功能
    public function switch_themes_on(){

        $this->_ci_view_paths = array(THEMES_DIR.$this->_theme=> TRUE);
    }
    #关闭皮肤功能
    public function switch_themes_off(){
        #不用写
    }

}
