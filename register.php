<!DOCTYPE html>
<html style="margin:0px">

<!--DISABLING ERROR REPORTING IN PHP-->
<?php
    session_start();
	error_reporting(E_ERROR | E_PARSE);
?>

<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title>Addrs</title>
	  <link rel="stylesheet" type="text/css" href="styles.css"/> 
</head>

<!--Header-->
<?php 
$back=true;
include "Include/header.php";?>

<div class="mainBlock" style="gap:24px; flex-direction: column; justify-content: center; padding: 0 48px 0 48px; height: 63vh;">
    <h2><span>2. Create an account to register the handle</span> <span style="font-style:italic"><?php
    $userName = $_SESSION["username"];
    echo($userName)
    ?></span></h2>
    <form method="POST" action="signup.php" style="gap:48px; display:flex; flex-direction: column; align-items: center;">
        <div style="display:flex; flex-direction: column; gap:16px; width:100%; align-items:center" >
        <input name="email" type=text class=searchbar placeholder="satoshi@email.com" style="border-radius: 10px; width: 25%;">
        <input name="password" type=text class=searchbar placeholder="********" style="border-radius: 10px; width: 25%;">
        </div>
        <div style="display:flex; flex-direction:rows; align-items:center; gap:48px">
            <input id="searchSubmit" value="Create account" type="submit" style="border-radius: 10px; background:#4D8DC8; color:#FFFFFF;">
            <div style="display:flex; gap:24px">
            <img style="width:32px; height:32px" src="Assets/google.png">
            <img style="width:32px; height:32px" src="Assets/metamask.png">
            </div>
        </div>
    </form>
</div>

<!--Footer-->
<?php include "Include/footer.html"?>

</html>