<?php
	error_reporting(E_ERROR | E_PARSE);
?>

<header class=navbar>

  <!--Searchbar-->
  <?php
    $hasSearch;
    if ($hasSearch) {
        include "Include/Header/searchBar.php";
    } else {
        include "Include/Header/emptyHeaderSection.html";
    }
  ?>

  <!--@ddrs-->
  <div class=headerSections id="headerTitle">
    <h1 id="title">@<span style="opacity: 50%;">ddrs</span></h1>
  </div>

  <!--Back-->
  <?php
    $back;
    $signInUp;
    if ($back) {
      include "Include/Header/backButton.html";
    }
    if ($signInUp) {
      include "Include/Header/logInSignUp.html";
    }
  ?>

</header>