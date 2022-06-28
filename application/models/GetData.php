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

	public function GetTestimoni($where = ""){
		$res = $this->db->query("Select * from testimoni ".$where);
		return $res;
	}

	public function GetHotelUnits($where = ""){
		$res = $this->db->query("SELECT * FROM `hotel_unit` ".$where);
		return $res;
	}

	public function GetRelationHotels($where = ""){
		$res = $this->db->query("SELECT 
		h.id as HotelId, h.name as HotelName, h.is_active as Status, h.price_from as PriceFrom, h.price_to as PriceTo, h.check_in as CheckInTime, h.rating as Rating, h.address as HotelAddress, h.admin_charge as AdminCharge, h.specification as Spec, d.path as Path, u.name as UnitName, u.value as UnitValue
		FROM `hotels` h 
		inner join `hotel_images` d 
		on h.id = d.hotel_id
        inner join `hotel_unit` u
        on h.id = u.hotel_id ".$where);
		return $res;
	}
}
 ?>