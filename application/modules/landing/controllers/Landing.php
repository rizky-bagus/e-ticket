<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends MY_Controller {
    public function __construct()
    {
        // Load the constructer from MY_Controller
        $this->load->model('M_landing');
        $this->load->model('GetData');
        parent::__construct();
    }

	public function index()
	{
        $hotels = $this->GetData->GetHotels()->result_array();
		$params = array(
            'hotels'    => $hotels,
			'buyerid' 	=> $this->session->userdata('buyerId'),
			'email' 	=> $this->session->userdata('email'),
			'phone' 	=> $this->session->userdata('phone')
		);
        $this->load->view('index', $params);
	}

    public function detail_hotel($id){
        $selectedHotel = $this->GetData->GetHotels("WHERE id = '".$id."'")->row();
        $otherHotels = $this->GetData->GetHotels("WHERE id <> '".$id."'")->result_array();
		$hotels = $this->db->query("SELECT 
                    i.id as ImageId, h.id as HotelId, i.path as ImagePath, h.name as HotelName, h.description as HotelDesc, h.price_to as PriceTo, h.specification as Facilities
                    FROM `hotel_images` i 
                    inner join `hotels`h
                    on i.hotel_id = h.id
                    WHERE h.id = '".$id."';")->result_array();

        $testimoni = $this->GetData->GetTestimoni("WHERE hotel_id = '".$id."';")->result_array();

		$params = array(
            'otherHotels'       => $otherHotels,
            'selectedHotel'     => $selectedHotel,
            'testimoni'         => $testimoni,
            'hotels'            => $hotels,
			'buyerid' 	        => $this->session->userdata('buyerId'),
			'email' 	        => $this->session->userdata('email'),
			'phone' 	        => $this->session->userdata('phone')
		);
        $this->load->view('detail', $params);
    }
}
