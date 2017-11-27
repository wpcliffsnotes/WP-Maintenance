<?php header('HTTP/1.1 503 Service Temporarily Unavailable'); header('Status: 503 Service Temporarily Unavailable'); header('Retry-After: 600'); ?>
<!DOCTYPE html>
<html class="cspio">
<head>
	<!---
	Welcome to our free WordPress Maintenance Mode template by http://wpcliffsnotes.com Get your free download at
						Youtube Tutorial: https://youtu.be/ioPnU4MMjGk
	This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License
	http://creativecommons.org/licenses/by-nc-nd/4.0/

	To get started follow this checklist.

	1. Replace the *Page Title* on lines 24, 32 & 297
	2. Set the *Page Description* on lines 27, 33 & 299
	3. Set an optional *Logo* on lines 295 using the src attribute.
	4. Set your *Facebook Profile* URL on line 313 using the href attribute.
	5. Set your *Twitter Profile* URL on line 314 using the href attribute.
	6. Set your *Email* on line 315 using the href attribute.
	7. Set your background image on line 64, see file README.mb for additional background images.
	8. FTP to your Website.
	9. Tutorial on how to set this up.

	-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Maintenance Mode</title>

	<meta name="generator" content="seedprod.com 1.0.0" />
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="http://wpcliffsnotes.com/wp-content/themes/wpcliffsnotes/favicon.png">
	<meta property="og:url" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="My WordPress Dtabase Error Page" />
	<meta property="og:description" content="" />

	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Bootstrap and default Style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://static.comingsoonpage.com/cspio-assets/1.0.0/style.css">

	<!-- Google Fonts -->
	<link class="gf-headline" href='https://fonts.googleapis.com/css?family=Roboto+Slab:400&subset=' rel='stylesheet' type='text/css'>

	<!-- Animate CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">

	<!-- Calculated Styles -->
	<style type="text/css">

		html {
			height: 100%;
			overflow: hidden;
		}

		body {
			height:100%;
			overflow: auto;
			-webkit-overflow-scrolling: touch;
		}

		html{
			height:100%;
			background: #ffffff url('http://wpcliffsnotes.com/maintenance.jpg'); no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		#cspio-page{
			background-color: #006595;
		}

		.flexbox #cspio-page{
			align-items: center;
			justify-content: center;
		}

		.cspio body{
			background: transparent;
		}

		.cspio body, .cspio body p{
			font-family: Helvetica, Arial, sans-serif;
			font-weight: 400;
			font-style: ;
			font-size: 20px;
			line-height: 1.50em;
			color:#ffffff;
		}

		::-webkit-input-placeholder {
			font-family:Helvetica, Arial, sans-serif;
			font-weight: 400;
			font-style: ;
		}

		::-moz-placeholder {
			font-family:Helvetica, Arial, sans-serif;
			font-weight: 400;
			font-style: ;
		}

		:-ms-input-placeholder {
			font-family:Helvetica, Arial, sans-serif;
			font-weight: 400;
			font-style: ;
		}

		:-moz-placeholder {
			font-family:Helvetica, Arial, sans-serif;
			font-weight: 400;
			font-style: ;
		}

		.cspio h1, .cspio h2, .cspio h3, .cspio h4, .cspio h5, .cspio h6{
			font-family: 'Roboto Slab';
			color:#ffffff;
		}

		#cspio-headline{
			font-family: 'Roboto Slab';
			font-weight: 400;
			font-style: ;
			font-size: 48px;
			color:#ffffff;
			line-height: 1.00em;
		}

		.cspio button{
			font-family: Helvetica, Arial, sans-serif;
			font-weight: 400;
			font-style: ;
		}

		.cspio a, .cspio a:visited, .cspio a:hover, .cspio a:active{
			color: #ffffff;
		}

		#cspio-socialprofiles a {
			color: #ffffff;
		}
		.cspio .btn-primary,
		.cspio .btn-primary:focus,
		.gform_button,
		#mc-embedded-subscribe, .submit-button {
			color: black;
			text-shadow: 0 -1px 0 rgba(255,255,255,0.3);
			background-color: #ffffff;
			background-image: -moz-linear-gradient(top,#ffffff,#d9d9d9);
			background-image: -ms-linear-gradient(top,#ffffff,#d9d9d9);
			background-image: -webkit-gradient(linear,0 0,0 100%,from(#ffffff),to(#d9d9d9));
			background-image: -webkit-linear-gradient(top,#ffffff,#d9d9d9);
			background-image: -o-linear-gradient(top,#ffffff,#d9d9d9);
			background-image: linear-gradient(top,#ffffff,#d9d9d9);
			background-repeat: repeat-x;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#d9d9d9', GradientType=0);
			border-color: #d9d9d9 #d9d9d9 #b3b3b3;
			border-color: rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);
			*background-color: #d9d9d9;
			filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
		}

		.cspio .btn-primary:hover,
		.cspio .btn-primary:active,
		.cspio .btn-primary.active,
		.cspio .btn-primary.disabled,
		.cspio .btn-primary[disabled],
		.cspio .btn-primary:focus:hover,
		.cspio .btn-primary:focus:active,
		.cspio .btn-primary:focus.active,
		.cspio .btn-primary:focus.disabled,
		.cspio .btn-primary:focus[disabled],
		#mc-embedded-subscribe:hover,
		#mc-embedded-subscribe:active,
		#mc-embedded-subscribe.active,
		#mc-embedded-subscribe.disabled,
		#mc-embedded-subscribe[disabled] {
			background-color: #d9d9d9;
			*background-color: #cccccc;
		}

		.cspio .btn-primary:active,
		.cspio .btn-primary.active,
		.cspio .btn-primary:focus:active,
		.cspio .btn-primary:focus.active,
		.gform_button:active,
		.gform_button.active,
		#mc-embedded-subscribe:active,
		#mc-embedded-subscribe.active {
			background-color: #bfbfbf;
		}

		.form-control,
		.progress {
			background-color: rgba(255, 255, 255, 0.85);
		}

		#cspio-progressbar span,
		.countdown_section {
			color: black;
			text-shadow: 0 -1px 0 rgba(255,255,255,0.3);
		}

		.cspio .btn-primary:hover,
		.cspio .btn-primary:active {
			color: black;
			text-shadow: 0 -1px 0 rgba(255,255,255,0.3);
			border-color: #e6e6e6;
		}

		.cspio input[type='text']:focus {
			webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 8px rgba(217,217,217,0.6);
			-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 8px rgba(217,217,217,0.6);
			box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 8px rgba(217,217,217,0.6);
		}

		#cspio-content {
			display: none;
			max-width: 600px;
			background-color: #000000;
			-webkit-border-radius: 2px;
			border-radius: 2px;
			-moz-background-clip: padding;
			-webkit-background-clip: padding-box;
			background-clip: padding-box;
			background-color:transparent;
		}

		.cspio .progress-bar,
		.countdown_section,
		.cspio .btn-primary,
		.cspio .btn-primary:focus,
		.gform_button {
			background-image: none;
			text-shadow: none;
		}

		.cspio input,
		.cspio input:focus {
			-webkit-box-shadow: none !important;
			box-shadow: none !important;
		}

		#cspio-page{
			background: -moz-radial-gradient(ellipse at center, rgba(0, 0, 0, 0.3) 0%,rgba(0, 0, 0, 0.2) 37%,rgba(0,0,0,0) 68%,rgba(0,0,0,0) 100%);
			background: -webkit-radial-gradient(ellipse at center, rgba(0, 0, 0, 0.3) 0%,rgba(0, 0, 0, 0.2) 37%,rgba(0,0,0,0) 68%,rgba(0,0,0,0) 100%);
			background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.3) 0%,rgba(0, 0, 0, 0.2) 37%,rgba(0,0,0,0) 68%,rgba(0,0,0,0) 100%);
		}

		.cspio body{
			background: -moz-radial-gradient(center, ellipse cover,  rgba(0,0,0,0) 7%, rgba(0,0,0,0) 80%, rgba(0,0,0,0.23) 100%);
			background: -webkit-radial-gradient(center, ellipse cover,  rgba(0,0,0,0) 7%,rgba(0,0,0,0) 80%,rgba(0,0,0,0.23) 100%);
			background: radial-gradient(ellipse at center,  rgba(0,0,0,0) 7%,rgba(0,0,0,0) 80%,rgba(0,0,0,0.23) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#3b000000',GradientType=1 );
		}

		#cspio-subscribe-btn{
			background:transparent;
			border: 1px solid #fff !important;
			color: #fff;
		}

		#cspio-subscribe-btn:hover{
			background: rgba(255,255,255,0.2);
			color: #fff;
		}

		#cspio-credit img{
			margin-left:auto;
			margin-right:auto;
			width:75px;
			margin-top: -4px;
		}

		#cspio-credit {
			font-size:11px;
		}

	</style>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Modernizr -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

	<!-- Google Analytics Code Goes Here-->
</head>
<body>
<div id="cspio-page">
	<div id="cspio-content">

		<img id="cspio-logo" src="https://wpcliffsnotes.com/maint-logo.png" width="300">

		<h1 id="cspio-headline">Maintenance Mode</h1>

		<div id="cspio-description">We are currently performing some quick updates.<br />Our website will be back up shortly.</div>

		<div id="cspio-socialprofiles">
			<a href="https://www.facebook.com/WPCliffsNotes" target="_blank"><i class="fa fa-facebook-official
			fa-2x"></i></a>
			<a href="https://twitter.com/WPCliffsNotes" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
			<a href="https://twitter.com/WPCliffsNotes" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
			<a href="mailto:hello@wpcliffsnotes.com"><i class="fa fa-envelope fa-2x"></i></a>
		</div>

	</div><!-- end of #cspio-content -->
</div>


<script>
    // Animate Delay
    setTimeout(function(){ jQuery("#cspio-content").show().addClass('animated fadeIn'); }, 250);

    // Reseize
    function resize(){
        $('head').append("<style id='form-style' type='text/css'></style>");
        $('#form-style').html('.cspio .input-group-btn, .cspio .input-group{display:block;width:100%;}.cspio #cspio-subscribe-btn{margin-left:0;width:100%;display:block;}.cspio .input-group .form-control:first-child, .cspio .input-group-addon:first-child, .cspio .input-group-btn:first-child>.btn, .cspio .input-group-btn:first-child>.dropdown-toggle, .cspio .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {border-bottom-right-radius: 4px;border-top-right-radius: 4px;}.cspio .input-group .form-control:last-child, .cspio .input-group-addon:last-child, .cspio .input-group-btn:last-child>.btn, .cspio .input-group-btn:last-child>.dropdown-toggle, .cspio .input-group-btn:first-child>.btn:not(:first-child) {border-bottom-left-radius: 4px;border-top-left-radius: 4px;}');
    }

    $('#cspio-content').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
        function(){
            var width = $('#cspio-field-wrapper').width();
            if(width < 480 && width != 0){
                resize();
            }
        }
    );
</script>

</body>
</html>

<!-- This page was generated by ComingSoonPage.com | Learn more: http://www.comingsoonpage.com -->
