<?php

class BookingDAO {
    public $link;
	
	public function __construct($link) {
        $this->link = $link;
    }
    # Retrieve all bookings
    public function retrieveAll() {
        
        $data = file_get_contents($this->link."bookings");
        $parsed = json_decode($data,True);
        return $parsed;
    }

    public function retrieveByUserId($id) {
        
        $data = file_get_contents($this->link."bookings3/{$id}");
        $parsed = json_decode($data,True);
        return $parsed;
    }

    public function retrieveBySessionId($id) {
        
        $data = file_get_contents($this->link."SearchDetilsBySessionID/{$id}");
        $parsed = json_decode($data,True);
        return $parsed;
    }
    
    public function editBooking(
        $bookingID,
        $UID,
        // $SessionID,
        // $Date,
        // $Status,
        // $Location,
        $BID
        ){

        //The URL that we want to send a PUT request to.
        $url = "{$this->link}"."bookings1";
        //Our fields.
        $fields = array(
            "bookingID" => $bookingID,
            "UID" => $UID,
            // "SessionID" => $SessionID,
            // "Date" => $Date,
            // "Status" => $Status
            // "Location" => $Location,
            "BID" => $BID 
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

    public function makeBooking(
        $bookingID,
        $UID,
        $SessionID,
        $Date,
        $Status,
        $Location,
        $BID)
        {

        //Initiate cURL.
        
        $url = "{$this->link}"."bookings2";
        $ch = curl_init($url);
        
        $jsonData = array(
            "bookingID" => $bookingID,
            "UID" => $UID,
            "SessionID" => $SessionID,
            "Date" => $Date,
            "Status" => $Status,
            "Location" => $Location,
            "BID" => $BID 
        );        
        
        //Encode the array into JSON.
        $jsonDataEncoded = json_encode($jsonData);
        
        //Tell cURL that we want to send a POST request.
        curl_setopt($ch, CURLOPT_POST, 1);
        
        //Attach our encoded JSON string to the POST fields.
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        
        //Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        //Execute the request
        $result = curl_exec($ch);
        if ($result === FALSE) { /* Handle error */ 
            return "Error";
        }
        else{
            $parsed = json_decode($result,True);
            return $parsed;
        }
    }
}
?>