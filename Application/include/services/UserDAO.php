<?php


class UserDAO {
    public $link;
	
	public function __construct($link) {
        $this->link = $link;
    }
    # Retrieve all bookings
    public function retrieveUser($UID) {
        
        $data = file_get_contents($this->link."user/{$UID}");
        $parsed = json_decode($data,True);
        return $parsed;
    }
    
    
}
?>