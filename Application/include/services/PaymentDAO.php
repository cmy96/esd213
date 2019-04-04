<?php


class PaymentDAO {
    public $link;
	
	public function __construct($link) {
        $this->link = $link;
    }

    # Retrieve all bookings
    public function retrieveAll() {
        
        $data = file_get_contents($this->link."getPayment");
        $parsed = json_decode($data,True);
        return $parsed;
    }
    public function makeBooking(
        $bid,
        $time,
        $amount){

        //Initiate cURL.
        
        $url = "{$this->link}"."payment";
        // var_dump($url);

        $ch = curl_init($url);
        
        $jsonData = array(
            "sessionID" => 1,
            "time_slot" => $time,
            "Amount" => $amount,
            "BID" => $bid
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