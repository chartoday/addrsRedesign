<!DOCTYPE html>
<html style="margin:0px">
<?php
    session_start();
?>
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Share&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <title>addrs.to</title>
  <link rel="stylesheet" type="text/css" href="styles.css"/> 
</head>

<!--Header-->
<?php 
$hasSearch = false;
$back = true;
include "Include/header.php"?>


<div class="mainBlock" style="gap:24px; flex-direction: column; justify-content: center; height:65vh">
  
  <h2>1. Register a handle for all your crypto addresses</h2>

  <div id="biggerSearchBar">
    <form method="POST" action="signup.php" style="display:flex; justify-content: center;">
      <input required name="usernameInput" type=text id="signUpSearchbar" class="searchbar" placeholder="satoshi">
      <input id="searchSubmit" value="Check" type="submit" style="border-radius: 0px 10px 10px 0px; background:#4D8DC8; color:#FFFFFF;">
    </form>

    <p style="margin:0; padding: 1em 0 0 0; color:#FA8446">
    <?php

      //This was supposed to search for PHP files, but this is obviously unefficient and we have to search
      //for SQL databases

      $userName = $_POST["usernameInput"];
      $url = "$userName.php";
      
      if ($userName == null) {
      } if (file_exists("$userName.php")) {
        echo "This addrs is not available! Check it <a href='{$url}'>here!</a>";
      }

      ?></p>
  </div>

</div>

<!--Footer-->
<footer class="shortPageFooter">
	<a href="index.php" class="footerP">Home</a>
	<a href="about.php" class="footerP">About</a>
	<a href="https://twitter.com/addrsTo" class="footerP">Twitter</a>
</footer>

<?php
if (!file_exists("$userName.php") && $userName != null) {
  header("Location: register.php");
  $_SESSION["username"] = $userName;
}
?>

</html>