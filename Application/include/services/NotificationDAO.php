<?php

class NotificationDAO {
    public $link;
	
	public function __construct($link) {
        $this->link = $link;
    }

    
    public function sendTelegram(
        $message
    )
        {

        //Initiate cURL.
        
        $url = "{$this->link}"."sendTelegram";
        $ch = curl_init($url);
        
        $jsonData = array(
            "chat_id" => "-1001326232905",
            "message" => $message 
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
        // var_dump($result);
        if ($result == FALSE) { /* Handle error */ 
            return "Error";
        }
        else{
            $parsed = json_decode($result,True);
            return $parsed;
        }
    }

    public function sendEmail(
        $email,
        $message

    )
        {

        //Initiate cURL.
        
        $url = "{$this->link}"."sendEmail";
        $ch = curl_init($url);
        
        $jsonData = array(
            "email" => $email,
            "message" => $message 
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
        if ($result == FALSE) { /* Handle error */ 
            return "Error";
        }
        else{
            $parsed = json_decode($result,True);
            return $parsed;
        }
    }
}
?>