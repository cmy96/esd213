<?php

require_once 'include/common.php';
$_SESSION['username'] = $_POST['username'];
header("Location: list-salons.php");

?>