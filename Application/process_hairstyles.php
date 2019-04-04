<?php

require_once "include/common.php";
include 'credentials.php';

include 'header.php';
$local_user = new UserDAO($user);
if (isset($_GET['hairstyle'])){
    $data = $local_user->updateHairstyle($uid,$_GET['hairstyle']);
    if ($data != "Error"){
        echo "Your favourite hairstyle has been updated";
    }
    else{
        echo "Whoops something went wrong";
    }
}

include 'footer.php';
?>