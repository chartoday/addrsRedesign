<?php
	error_reporting(E_ERROR | E_PARSE);
?>

<div class=headerSections style="padding:0px;justify-constent: left">
	<form method="POST" style="display:flex">
		<input name="userSearch" type=text class=searchbar placeholder="satoshi" style="border-radius: 10px 0px 0px 10px">
		<input id="searchSubmit" value="Search" type="submit" style="border-radius: 0px 10px 10px 0px; background:#4D8DC8; color:#FFFFFF;">
	</form>

    <?php $userSearch = $_POST["userSearch"];?>
</div>