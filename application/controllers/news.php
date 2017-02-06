<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News extends Home_Controller {
    public function __construct()
    {
        parent::__construct();
        #载入news_model,载入之后，可以使用$this->user_model来操作
        $this->load->model('news_model');
    }

    //显示新闻添加页面
    public function add(){
        $this->load->view('add.html');

    }
    //完成新闻的添加
    public function insert(){
        $data['title']=$_POST['title'];
        $data['author']=$_POST['author'];
        $data['content']=$_POST['content'];
        $data['add_time']=time();
        #调用news_model的方法即可
        if($this->news_model->add_news($data)){
            echo "添加成功！";
        }else{
            echo "添加失败！";
        }
    }
    // 显示新闻列表
    public function index(){
        #调用list_news方法得到数据
        $data['news']=$this->news_model->list_news();
        #分配到视图
        $this->load->view('list.html',$data);
    }
    //显示编辑页面
    public function edit(){
        $id=$_GET['id'];
        #调用edit_news方法得到数据
        $data=$this->news_model->edit_news($id);
        #分配到视图
        $this->load->view('edit.html',$data[0]);
    }
    //完成修改功能
    public function update(){
        $id=$_POST['id'];
        $data['title']=$_POST['title'];
        $data['author']=$_POST['author'];
        $data['content']=$_POST['content'];
        #调用update_news方法得到数据
        if($this->news_model->update_news($id,$data)){
            echo '修改成功！';
        }else{
            echo '修改失败！';
        }
    }
    //完成删除功能
    public function delete(){
        $id=$_GET['id'];
        #调用delete_news方法得到数据
        if($this->news_model->delete_news($id)){
            echo '删除成功！';
        }else{
            echo '删除失败！';
        }
    }
}