<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TheGamePlace | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css.map" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">

    <!-- Custom styles for this template -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Load the Navigation -->
        <?php $this->load->view('lay-out/include/navbar'); ?>
    </div>

    <div class="container">
		<div class="row">
			<div class="col-md-4">
			    <!-- Load the sidebar -->
				<?php $this->load->view('lay-out/include/sidebar'); ?>
			</div>
			
			<div class="col-md-8">
				<div class="panel panel-default">
				<div class="panel-heading panel-heading-green">
					<h3 class="panel-title">TheGamePlace</h3>
				</div>
				<div class="panel-body">