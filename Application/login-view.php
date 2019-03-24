<?php

//require_once 'include/session.php';
require_once 'include/common.php';

$username = '';
if (isset($_POST['username'])) {
    $username = $_POST['username'];
}

//assume that user is always able to log in
include 'header.php';
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php printErrors(); ?>
    
    <form id='login-form' method="post" action="login.php">
        <table>
        <tr>
            <td>
                Username
            </td>
            <td>
                <input name="username" value="<?= $username ?>" />
            </td>
        </tr>
        <tr>
            <td>
                Password
            </td>
            <td>
                <input name="password" type="password" />
            </td>
        </tr>
        </table>
        <input type="submit" value="Login"/>
    </form>
</body>
</html>