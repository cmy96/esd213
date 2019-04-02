<?php


class SalonDAO {
    public $link;
	
	public function __construct($link) {
        $this->link = $link;
    }
    # Retrieve all bookings
    public function retrieveAll() {
        
        $data = file_get_contents($this->link."getAllBookingSlot");
        $parsed = json_decode($data,True);
        return $parsed;
    }
    
    
}
?>