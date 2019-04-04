<?php


class SalonDAO {
    public $link;
	
	public function __construct($link) {
        $this->link = $link;
    }
    # Retrieve all bookings
    public function retrieveAll() {
        
        $data = file_get_contents($this->link."GetAllBookingSlots");
        $parsed = json_decode($data,True);
        return $parsed;
    }
    public function retrieveBySessionId($id) {
        
        $data = file_get_contents($this->link."SearchDetilsBySessionID/{$id}");
        $parsed = json_decode($data,True);
        return $parsed;
    }
    
    
}
?>