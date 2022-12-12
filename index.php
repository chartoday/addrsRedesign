<!DOCTYPE html>
<html style="margin:0px">

<!--DISABLING ERROR REPORTING IN PHP-->
<?php
	error_reporting(E_ERROR | E_PARSE);
?>

<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share&display=swap" rel="stylesheet">
	<script src="app.js"></script>
	<meta charset="utf-8">
	<title>Addrs</title>
	  <link rel="stylesheet" type="text/css" href="styles.css"/> 
</head>

<!--Header-->
<?php 
$hasSearch = true;
$signInUp = true;
include "Include/header.php"?>


<!--Boddy-->
<div class=mainBlock>
	<!---->
	<div class="mainColumn">
		<div class=mainDiv>
			<h2 style="font-size:2em; margin:0;">Send/receive crypto</h2>
			<h2 style="font-size:2em; margin:0">without addresses</h2>
		</div>	
		<div class=mainDiv>
			<h2 style="margin:0;">Pay with Visa/MC</h2>
			<p style="margin:0">Anyone can pay you using Visa and Mas&shyter&shycard, but with you re&shycei&shyving Cryp&shyto di&shyrect&shyly to 
            your wa&shyllet! No sign&shyup, no KYC, no BANK account nee&shyded! In&shyter&shyna&shytio&shynal, real-&shytime and low fees! Use to #earn 
            your Cryp&shyto. Ama&shyzing for free&shylan&shycers, small busi&shyne&shysses and get&shyting paid for that pi&shyzza bill!</p>
			<img src="Assets/Card.png">
		</div>	
	</div>
	<!---->
	<div class="mainColumn">
		<div class=mainDiv>
			<h2 style="margin:0;">ALL your crypto</h2>
			<p style="margin:0">We support as many assets as po&shyssi&shyble! From BTC to ETH to To&shykens to pri&shyva&shycy to&shykens, 
            what&shyever you need we have it, and if we don't just ask!</p>		
            <div style="align-content: flex;flex-direction: row; gap:16px ">
				<img src="Assets/BTC.png">
				<img src="Assets/ETH.png">
				<img src="Assets/USDC.png">
			</div>
		</div>	
		<div class=mainDiv>
			<h2 style="margin:0;">Non-custodial</h2>
			<p style="margin:0">Your Cryp&shyto, your keys! All your assets are di&shyrect&shyly sent to your wa&shyllets! Your han&shydle 
            sim&shyply acts like a road, so ra&shyther than nee&shyding to give spe&shyci&shyfic, com&shypli&shyca&shyted di&shyrec&shytions, they use GPS.</p>
			<img src="Assets/Key.png">
		</div>	
	</div>
	<!---->
</div>

<!--Footer-->
<footer>
	<a href="index.php" class="footerP">Home</a>
	<a href="about.php" class="footerP">About</a>
	<a href="https://twitter.com/addrsTo" class="footerP">Twitter</a>
</footer>

</html>