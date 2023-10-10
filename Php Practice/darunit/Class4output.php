<?php
    if (isset($_POST['btn'])){
        $username = $_POST['user_name'];
        $password = $_POST['password'];
    }

?>

<p>Username:<?php if (isset($username)){
        echo " ".$username;
    } ?>
</p>
    <p>Password:<?php if (isset($password)){
        echo " ".$password;
    } ?>
</p>
