<?php 


require_once "include/common.php";
include 'header.php';

// hardcoded uid
$uid = $_GET['uid'];
$local_user = new UserDAO($user);
$booking = new BookingDAO($bookings);
$salons = new SalonDAO($salon);
$user_data = $local_user->retrieveUser($uid);
echo "<h2 class='text'>User ID: {$uid}</h2>";

echo "<table class='table'>
<tr><th>Username</th><td>{$user_data['Name']}</td></tr>
<tr><th>Phone</th><td>{$user_data['Phone']}</td></tr>
<tr><th>Email</th><td>{$user_data['Email']}</td></tr>
<tr><th>TelegramID</th><td>{$user_data['TelegramID']}</td></tr>
";
if (isset($user_data["Hairstyle_link"]) & $user_data["Hairstyle_link"] != ""){
    echo "<tr><th>Favourite Hairstyle</th><td><img src='{$user_data['Hairstyle_link']}'/></td>";
}
echo "</tr>
</table>";
?>





