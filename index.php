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
			<h2 style="margin:0;">Send/receive crypto</h2>
			<h2 style="margin:0">without addresses</h2>
		</div>	
		<div class=mainDiv>
			<h2 style="margin:0;">Pay with Visa/MC</h2>
			<p style="margin:0">Anyone can pay you using Visa and Mastercard, but with you receiving Crypto directly to 
            your wallet! No signup, no KYC, no BANK account needed! International, real-time and low fees! Use to #earn 
            your Crypto. Amazing for freelancers, small businesses and getting paid for that pizza bill!</p>
			<img src="Assets/Card.png">
		</div>	
	</div>
	<!---->
	<div class="mainColumn">
		<div class=mainDiv>
			<h2 style="margin:0;">ALL your crypto</h2>
			<p style="margin:0">We support as many assets as possible! From BTC to ETH to Tokens to privacy tokens, 
            whatever you need we have it, and if we dont just ask!</p>		
            <div style="align-content: flex;flex-direction: row; gap:16px ">
				<img src="Assets/BTC.png">
				<img src="Assets/ETH.png">
				<img src="Assets/USDC.png">
			</div>
		</div>	
		<div class=mainDiv>
			<h2 style="margin:0;">Non-custodial</h2>
			<p style="margin:0">Your Crypto, your keys! All your assets are directly sent to your wallets! Your handle 
            simply acts like a road, so rather than needing to give specific, complicated directions, they use GPS.</p>
			<img src="Assets/Key.png">
		</div>	
	</div>
	<!---->
</div>

<!--Footer-->
<?php include "Include/footer.html"?>

</html>