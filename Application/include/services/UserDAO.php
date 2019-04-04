<?php


class UserDAO {
    public $link;
	
	public function __construct($link) {
        $this->link = $link;
    }
    # Retrieve all bookings
    public function retrieveUser($UID) {
        
        $data = file_get_contents($this->link."user_get/{$UID}");
        $parsed = json_decode($data,True);
        return $parsed;
    }
    
    public function updateHairstyle($UID,$hairstyle_link) {
        
        //The URL that we want to send a PUT request to.
        $url = "{$this->link}"."user_update";
        //Our fields.
        $fields = array(
            "UID" => $UID,
            "Hairstyle_link" => $hairstyle_link
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
        // var_dump($response);
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