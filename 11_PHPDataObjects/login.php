<?php

require 'includes/url.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($_POST['username'] == 'dave' && $_POST['password'] == 'secret'){
        session_regenerate_id(true);
        $_SESSION['is_logged_in'] = true;
        redirect('/php/09_PHPSessionsLoginRestrictAccess/');
    }else{
        $error ="Unauthorized";
    }
}
?>
<?php require 'includes/header.php' ?>
<h2>Login</h2>
<?php if(!empty($error)):?>
<p><?=$error?></p>
<?php endif; ?>
<form method="post" >
    <div>
        <label for="username">Username</label>
        <input name="username" id="username">
    </div>
    <div>
        <label for="password">Password</label>
        <input name="password" id="password" type="password">
    </div>
    <button>Login</button>
</form>
<?php require 'includes/footer.php'?>
