<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Report extends CI_controller{
		public function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->load->view('report/index');
		}
		public function add_info(){
			$post=$this->input->post();
			extract($post);
			$post['addtime']=time();
			if($submit){
				$res=$this->db->insert('report',$post);
				if($res){
					echo "<script>alert('添加成功');window.location.href='".site_url('report/rlist')."';</script>";
				}
			}
		}
		public function mylist(){
			$res=$this->db->get("report");
			if($res->num_rows()>0){
				$list=$res->result_array();
			}else{
				$list=0;
			}
			$data['list']=$list;
			$this->load->view('report/list',$data);
		}
	}
?>
