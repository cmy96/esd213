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

    public function retrieveById($id) {
        
        $data = file_get_contents($this->link."bookings3/{$id}");
        $parsed = json_decode($data,True);
        return $parsed;
    }

    public function editBooking(
        $bookingID,
        $UID,
        $SessionID,
        $Date,
        $Status,
        $Location,
        $BID){

        //The URL that we want to send a PUT request to.
        $url = "{$this->link}"."bookings1";

        //Initiate cURL
        $ch = curl_init($url);

        //Use the CURLOPT_PUT option to tell cURL that
        //this is a PUT request.
        curl_setopt($ch, CURLOPT_PUT, true);

        //We want the result / output returned.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //Our fields.
        $fields = array(
            "bookingID" => $bookingID,
            "UID" => $UID,
            "SessionID" => $SessionID,
            "Date" => $Date,
            "Status" => $Status,
            "Location" => $Location,
            "BID" => $BID 
                        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));

        //Execute the request.
        $response = curl_exec($ch);
        $parsed = json_decode($response,True);
        echo $parsed;
    }

    public function makeBooking(
        $bookingID,
        $UID,
        $SessionID,
        $Date,
        $Status,
        $Location,
        $BID){

        $url = "{$this->link}"."bookings2";
        $data = array(
            "bookingID" => $bookingID,
            "UID" => $UID,
            "SessionID" => $SessionID,
            "Date" => $Date,
            "Status" => $Status,
            "Location" => $Location,
            "BID" => $BID 
                        );

        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
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