<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News_model extends CI_Model {
    const TBL = 'news';
    //构造函数
    public function __construct()
    {
        //显示调用父类构造函数,防止被子类重写
        parent::__construct();
        //手动载入数据库类
        $this->load->database();
    }
    /**
     * @access public
     * @param $data array
     * @return bool 成功返回true，失败返回false
     */
    public function add_news($data){
        //使用AR类完成插入操作
       return $this->db->insert(self::TBL,$data);
    }
    /**
     * @access public
     * @return array 查询结果
     */
    public function list_news(){
        $query=$this->db->get(self::TBL);//返回结果集
        return  $query->result_array();//记录集作为关联数组返回
    }
    /**
     * @access public
     * @return array 查询结果
     */
    public function edit_news($id){
        $query=$this->db->get_where(self::TBL,array('id'=>$id));//返回带条件的结果集
        return $query->result_array();//记录集作为关联数组返回
    }
    /**
     * @access public
     * @param $data array,$id 条件
     * @return array bool 成功返回true，失败返回false
     */
    public function update_news($id,$data){
        $this->db->where('id',$id);
        return $this->db->update(self::TBL,$data);
    }
    /**
     * @access public
     * @param $id 条件
     * @return array bool 成功返回true，失败返回false
     */
    public function delete_news($id){
        $this->db->where('id', $id);
        return $this->db->delete(self::TBL);
    }
}