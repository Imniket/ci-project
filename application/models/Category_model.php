<?php
/**
* 
*/
class Category_model extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}
	function get_category_id(){
		return $this->db->get_where('category',array('id' => $id ))->row_array();
	}
	function get_all_category(){
		$this->db->order_by('id','desc');
		return $this->db->get('category')->result_array();
	}
	function insert_category($params){
		$this->db->insert('category',$params);
		return $this->db->insert_id();
	}
	function update_category($id,$params){
		$this->db->where('id',$id);
		return $this->db->update('category',$params);
	}
	function delete_category($id){
		return $this->db->delete('category',array('id' => $id));
	}
}
?>