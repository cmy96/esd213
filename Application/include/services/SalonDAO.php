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
    
    public function reduceAvailability($sessionid){
        $url = "{$this->link}"."UpdateAvailableSlot";
        //Our fields.
        $fields = array(
            "sessionID" => $sessionid,
                        );
        //Encode the array into JSON.
        $data_json = json_encode($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response  = curl_exec($ch);
        curl_close($ch);
        if ($response === FALSE) { /* Handle error */ 
            return "Error";
        }
        else{
            $parsed = json_decode($response,True);
            return $parsed;
        }
    }
}
?>