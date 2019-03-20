<?php
require_once "include/common.php";
include 'header.php';
?>

<body>
<div class="container p-4 m-1" >

<?php
// $url = 'http://server.com/path';
// $data = array('key1' => 'value1', 'key2' => 'value2');

// // use key 'http' even if you send the request to https://...
// $options = array(
//     'http' => array(
//         'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//         'method'  => 'POST',
//         'content' => http_build_query($data)
//     )
// );
// $context  = stream_context_create($options);
// $result = file_get_contents($url, false, $context);
// if ($result === FALSE) { /* Handle error */ }

// var_dump($result);
$dummy_output = '
{       	
    "response":"201",
    "bookingID": "1",
    "Status":"Open"
}';

$results = json_decode($dummy_output,True);
if ($results["response"] == "201"){
    echo"<h3>Sucessfully created booking</h3>";
}
else{
    echo "Oops something went wrong";
}

?>
</div>
</body>

<?php 
include "footer.php";
?>




</html>