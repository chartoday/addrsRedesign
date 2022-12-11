<!DOCTYPE html>
<html style="margin:0px">

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


<div class="mainBlock" style="flex-direction: column; justify-content: center; padding: 0 48px 0 48px; height: 63vh;">
  
  <h2>1. Register a handle for all your crypto addresses</h2>
  <div>
    <form style="display:flex; justify-content: center;">
      <input type=text class=searchbar placeholder="satoshi" style="border-radius: 10px 0px 0px 10px; width: 33%;"></input>
      <button id="testButton" style="border-radius: 0px 10px 10px 0px; background:#FA8446; color:#FFFFFF;">Taken!</button>
    </form>

  <p style="margin:0; padding: 1em 0 0 0; color:#FA8446 ;">This addrs is not available! Check the profile 
  <a style = " white-space:nowrap; color:#FA8446;" href="config_json">here!</a></p>
  </div>
  
</div>


<?php include "Include/footer.html"?>

</html>