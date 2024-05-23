<!doctype html>
<html lang="en"<?php
if (isset($use_angularjs)) {
    echo ' ng-app="myApp"';
}
?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Fionn Ross | Simple CI3 CMS with HMVC | Welcome</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		
		<!-- Latest compiled and minified Bootstrap CSS online -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- Latest compiled and minified Bootstrap CSS local -->
  <link rel="stylesheet" href="<?php echo base_url();?>public_assets/css/bootstrap.min.css">
  
		<!-- Latest compiled and minified JavaScript online -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <!-- Latest compiled and minified JQuery UI CSS local -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>public_assets/jquery-ui-1.12.1.custom/jquery-ui.min.css">
		
		
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url(); ?>public_assets/css/jumbotron.css" rel="stylesheet">

        <script src="<?php echo base_url(); ?>public_assets/js/vendor/modernizr-2.8.3.min.js"></script>
		
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
