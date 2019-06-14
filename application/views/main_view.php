<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE HTML>
<html>
<head>
<style>
img{
    width:210px;
    height:100px;
}
</style>
    <link rel='stylesheet' type='text/css' href='<?= base_url(); ?>assets/css/home.css?v=0.05' />

    <script src='<?= base_url(); ?>/assets/js/home.js?v=0.01'></script>
</head>


<body>
<img src="<?= base_url(); ?>assets/images/site/logo_sipromo_150_maroon.png" />


<nav class="navbar">
<span class="open-slide">
<a href="#">
<svg width="30" height="30">
	<path d="M0,5 30,5" stroke="#fff"
	stroke-width="5"/>
	<path d="M0,14 30,14" stroke="#fff"
	stroke-width="5"/>
	<path d="M0,23 30,23" stroke="#fff"
	stroke-width="5"/>
</svg>
</a>
</span>

<ul class="navbar-nav">
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">Contact</a></li>
</ul>
</nav>
<div id="side-menu" class="side-nav">
<a href="#"class="btn-close" onclick="closeSlideMenu()">&times;</a>
<a href="#">Home</a>
<a href="#">About</a>
<a href="#">Services</a>
<a href="#">Contact</a>
</div>

<div id="main">
	<h1>Menu</h1>
</div>
<?= base_url(); ?>
<script src="home.js">
</script>

</body>
</html>