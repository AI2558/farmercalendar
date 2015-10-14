<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html><html lang="en">
	<head>

		<meta charset="utf-8">
		<title>ยินดีต้อนรับสู่ปฏิทินล้นเกวียน</title>

		<!-- Bootstrap core CSS -->
		<?= css_asset('lavish-bootstrap.css'); ?>

		<!-- Custom styles for this template -->
		<?= css_asset("navbar-fixed-top.css"); ?>

		<!-- JQuery -->
		<?= js_asset("bower_components/jquery/dist/jquery.js"); ?>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script>
			$(function() {
				$("#datepicker").datepicker();
			});
		</script>
	</head>

	<body>
		<!-- Fixed navbar -->
		<?php $page = $this->session->userdata('page'); ?>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">ปฏิทินล้นเกวียน</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="<?= (($page == 'home') ?  'active' : 'last'); ?>">
							<a href="home">หน้าแรก</a>
						</li>
						<li class="<?= (($page == 'about') ?  'active' : 'last'); ?>">
							<a href="about">เกี่ยวกับ</a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

