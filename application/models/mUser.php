<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MUser extends CI_Model {

	public function insert($data){
		return $this->db->insert('user',$data);	
	}
  
	public function update($id,$data){
		$this->db->where('id',$id);
		return $this->db->update('user',$data);
	}

	public function delete($id){
		return $this->db->delete('user','id = '.$id);
	}

	public function getAut($param = ''){
		$query  = "SELECT nama FROM user WHERE ".$param;
		$result = $this->db->query($query)->result();
		$nama  = '';
		if (count($result) != 0) {
			foreach ($result as $row) {}
			$nama = $row->nama;
		}
		return $nama;
	}

	public function getUser($param=''){
		$query = "SELECT * FROM user WHERE id != 1 ORDER BY id DESC";
		if ($param!='') {
			$query = "SELECT * FROM user WHERE id != 1 AND ".$param." ORDER BY id DESC";
		}
		return $this->db->query($query)->result();
	}
}