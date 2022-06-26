<?php 

class Checkout extends MY_Controller {

    public function __construct()
    {
		$this->load->model('Crud');
		$this->load->model('GetData');
        parent::__construct();
    }

	public function index($hotelId)
	{
		$hotels = $this->db->query("SELECT 
		h.id as HotelId, h.name as HotelName, h.is_active as Status, h.price_from as PriceFrom, h.price_to as PriceTo, h.check_in as CheckInTime, h.address as HotelAddress, h.admin_charge as AdminCharge, h.specification as Spec, d.path as Path, u.name as UnitName, u.value as UnitValue
		FROM `hotels` h 
		inner join `hotel_images` d 
		on h.id = d.hotel_id
        inner join `hotel_unit` u
        on h.id = u.hotel_id
		WHERE h.id = '".$hotelId."';")->result_array();

		$params = array(
			'hotel' 	=> $hotels,
			'checkIn'	=> date_format(date_create(date("Y-m-d")),"l, F jS Y"),
			'checkOut'	=> date_format(date_create(date("Y-m-d", time() + 86400)),"l, F jS Y"),
			'buyerid' 	=> $this->session->userdata('buyerId'),
			'email' 	=> $this->session->userdata('email'),
			'phone' 	=> $this->session->userdata('phone')
		);
        $this->load->view('index', $params);
	}

	public function SubmitBooking() {
		$hotelId = $this->input->post('HotelId');
		$phone = $this->input->post('InputPhone');
		$email = $this->input->post('InputEmail');
		$addons = $this->input->post('InputAddOns');
		$notes = $this->input->post('InputNotes');
		$grandtotal = $this->input->post('InputGrand');
		$stringAddOns = $addons ? join(",", $addons) : '';
		$now = date("Y-m-d H:i:s");

		$insertTransaction = $this->Crud->InsertData('transactions', array(
			'buyer_id'		=> $this->session->userdata('buyerId'),
			'hotel_id'		=> $hotelId,
			'date'			=> $now,
			'phone'			=> $phone,
			'email'			=> $email,
			'amount'		=> $grandtotal,
			'addons'		=> $stringAddOns,
			'description'	=> $notes,
			'status'		=> "Booked"
		));

		if ($insertTransaction > 0) {
			echo "Booking Berhasil! <a href='".base_url()."landing'>Ok</a>";
		} else {
			show_404();
		}
	}
}
