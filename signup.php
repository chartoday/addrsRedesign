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


<div class="mainBlock" style="gap:24px; flex-direction: column; justify-content: center; padding: 0 48px 0 48px; height: 63vh;">
  
  <h2>1. Register a handle for all your crypto addresses</h2>

  <div>
    <form method="POST" action="signup.php" style="display:flex; justify-content: center;">
      <input name="usernameInput" type=text class=searchbar placeholder="satoshi" style="border-radius: 10px 0px 0px 10px; width: 25%;">
      <input id="searchSubmit" value="Check" type="submit" style="border-radius: 0px 10px 10px 0px; background:#4D8DC8; color:#FFFFFF;">
    </form>

    <p style="margin:0; padding: 1em 0 0 0; color:#FA8446">
    <?php
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
<?php include "Include/footer.html"?>

<?php
if (!file_exists("$userName.php") && $userName != null) {
  header("Location: register.php");
  $_SESSION["username"] = $userName;
}
?>

</html>