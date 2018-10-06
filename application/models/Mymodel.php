<?php
 class Mymodel extends CI_Model
 {
 	public function insert($company)
 	{
 		$this->db->insert('info',$company);
 	}
 }

?>