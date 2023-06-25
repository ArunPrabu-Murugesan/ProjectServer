<?php
  defined("BASEPATH") or exit("No Direct Script Access Allowed");
  
  class FormModel extends CI_Model {
    public function insertData($u_name, $u_pass, $u_email, $u_addr, $u_dob, $u_gen, $u_lang, $u_city, $u_img) {
	  $data = array("u_name"=>"$u_name", "u_pass"=>"$u_pass", "u_email"=>"$u_email", "u_addr"=>"$u_addr", "u_dob"=>"$u_dob", "u_gen"=>"$u_gen", "u_lang"=>"$u_lang", "u_city"=>"$u_city", "u_img"=>"$u_img");
	  $result = $this->db->insert("tbl_user", $data);
	  if($result==true) {
	    redirect(base_url()."FormCtrl/successMsg");
	  } else {
	    redirect(base_url()."FormCtrl/errorMsg");
	  }
	}
	
	public function selectData() {
	  $qry = $this->db->select('*')->from("tbl_user")->order_by("u_id","ASC")->get();
	  return $qry->result();
	}
	
  }
?>