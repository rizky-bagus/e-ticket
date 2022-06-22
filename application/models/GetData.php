<?php 
class GetData extends CI_Model
{
	public function GetAuth($where = ""){
		$res = $this->db->query("Select * from `auths` ".$where);
		return $res;
	}
	public function GetBuyer($where = ""){
		$res = $this->db->query("Select * from buyers ".$where);
		return $res;
	}
	
	public function GetRoles($where = ""){
		$res = $this->db->query("Select * from roles ".$where);
		return $res;
	}

	public function GetHotels($where = ""){
		$res = $this->db->query("Select * from hotels ".$where);
		return $res;
	}
}
 ?>