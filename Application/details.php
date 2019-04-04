<?php 


require_once "include/common.php";
include 'header.php';

$uid = 1;

$current_user = new UserDAO($user);

$user_data = $current_user->retrieveUser($uid);

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
include 'footer.php';
?>





