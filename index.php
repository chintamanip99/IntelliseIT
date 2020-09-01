<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
$mysql_host='fdb25.awardspace.net';
$mysql_user='2967600_regallclass';
$mysql_password='intelliseit@123';
if($link=@mysqli_connect($mysql_host,$mysql_user,$mysql_password)){
  if(@mysqli_select_db($link,'2967600_regallclass')){
    //echo "success";
  }
}
else{
  die("Cant connect to database!!sorry"); 
}



?>




<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" href="logo3.JPG">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.col-md-3 images_1_of_4 text-center{
  max-width:500px;max-height: 500px;
  overflow:scroll;
}
	
/*--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--*/
/*-- reset --*/
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, dl, dt, dd, ol, nav ul, nav li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
}



article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
  display: block;
}

ol, ul {
  list-style: none;
  margin: 0px;
  padding: 0px;
}

blockquote, q {
  quotes: none;
}

blockquote:before, blockquote:after, q:before, q:after {
  content: '';
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

/*-- start editing from here --*/
a {
  text-decoration: none;
}

.txt-rt {
  text-align: right;
}

/* text align right */
.txt-lt {
  text-align: left;
}

/* text align left */
.txt-center {
  text-align: center;
}

/* text align center */
.float-rt {
  float: right;
}

/* float right */
.float-lt {
  float: left;
}

/* float left */
.clear {
  clear: both;
}

/* clear float */
.pos-relative {
  position: relative;
}

/* Position Relative */
.pos-absolute {
  position: absolute;
}

/* Position Absolute */
.vertical-base {
  vertical-align: baseline;
}

/* vertical align baseline */
.vertical-top {
  vertical-align: top;
}

/* vertical align top */
nav.vertical ul li {
  display: block;
}

html {
  scroll-behavior: smooth;
}

/* vertical menu */
nav.horizontal ul li {
  display: inline-block;
}

/* horizontal menu */
img {
  max-width: 100%;
}

/*-- end reset --*/
body {
  background: #76b852;
  /* fallback for old browsers */
  background: -webkit-linear-gradient(to top, #76b852, #8DC26F);
  background: -moz-linear-gradient(to top, #76b852, #8DC26F);
  background: -o-linear-gradient(to top, #76b852, #8DC26F);
  background: linear-gradient(to top, #76b852, #8DC26F);
  background-size: cover;
  background-attachment: fixed;
  font-family: 'Roboto', sans-serif;
}

h1 {
  font-size: 3em;
  text-align: center;
  color: #fff;
  font-weight: 100;
  text-transform: capitalize;
  letter-spacing: 4px;
  font-family: 'Roboto', sans-serif;
}

/*-- main --*/
.main-w3layouts {
  padding: 3em 0 1em;
}

.main-agileinfo {
  width: 80%;
  height:100%;
  margin: 3em auto;
  background: rgba(0, 0, 0, 0.18);
  background-size: cover;
}

.agileits-top {
  padding: 3em;
}

input[type="text"], input[type="email"], input[type="password"] {
  font-size: 0.9em;
  color: #fff;
  font-weight: 100;
  width: 94.5%;
  display: block;
  border: none;
  padding: 0.8em;
  border: solid 1px rgba(255, 255, 255, 0.37);
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background-position: -800px 0;
  background-size: 100%;
  background-repeat: no-repeat;
  color: #fff;
  font-family: 'Roboto', sans-serif;
}

input.email, input.text.w3lpass {
  margin: 2em 0;
}

.text:focus, .text:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}

.text:focus::-webkit-input-placeholder, .text:valid::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
  font-size: .9em;
  -webkit-transform: translateY(-30px);
  -moz-transform: translateY(-30px);
  -o-transform: translateY(-30px);
  -ms-transform: translateY(-30px);
  transform: translateY(-30px);
  visibility: visible !important;
}

::-webkit-input-placeholder {
  color: #fff;
  font-weight: 100;
}

:-moz-placeholder {
  /* Firefox 18- */
  color: #fff;
}

::-moz-placeholder {
  /* Firefox 19+ */
  color: #fff;
}

:-ms-input-placeholder {
  color: #fff;
}

input[type="submit"] {
  font-size: .9em;
  color: #fff;
  background: #76b852;
  outline: none;
  border: 1px solid #76b852;
  cursor: pointer;
  padding: 0.9em;
  -webkit-appearance: none;
  width: 100%;
  margin: 2em 0;
  letter-spacing: 4px;
}

input[type="submit"]:hover {
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  -o-transition: .5s all;
  -ms-transition: .5s all;
  transition: .5s all;
  background: #8DC26F;
}

.agileits-top p {
  font-size: 1em;
  color: #fff;
  text-align: center;
  letter-spacing: 1px;
  font-weight: 300;
}

.agileits-top p a {
  color: #fff;
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  transition: .5s all;
  font-weight: 400;
}

.agileits-top p a:hover {
  color: #76b852;
}

/*-- //main --*/
/*-- checkbox --*/
.wthree-text label {
  font-size: 0.9em;
  color: #fff;
  font-weight: 200;
  cursor: pointer;
  position: relative;
}

input.checkbox {
  background: #8DC26F;
  cursor: pointer;
  width: 1.2em;
  height: 1.2em;
}

input.checkbox:before {
  content: "";
  position: absolute;
  width: 1.2em;
  height: 1.2em;
  background: inherit;
  cursor: pointer;
}

input.checkbox:after {
  content: "";
  position: absolute;
  top: 0px;
  left: 0;
  z-index: 1;
  width: 1.2em;
  height: 1.2em;
  border: 1px solid #fff;
  -webkit-transition: .4s ease-in-out;
  -moz-transition: .4s ease-in-out;
  -o-transition: .4s ease-in-out;
  transition: .4s ease-in-out;
}

input.checkbox:checked:after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  height: .5rem;
  border-color: #fff;
  border-top-color: transparent;
  border-right-color: transparent;
}

.anim input.checkbox:checked:after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  height: .5rem;
  border-color: transparent;
  border-right-color: transparent;
  animation: .4s rippling .4s ease;
  animation-fill-mode: forwards;
}

@keyframes rippling {
  50% {
    border-left-color: #fff;
  }

  100% {
    border-bottom-color: #fff;
    border-left-color: #fff;
  }
}

/*-- //checkbox --*/
/*-- copyright --*/
.colorlibcopy-agile {
  margin: 2em 0 1em;
  text-align: center;
}

.colorlibcopy-agile p {
  font-size: .9em;
  color: #fff;
  line-height: 1.8em;
  letter-spacing: 1px;
  font-weight: 100;
}

.colorlibcopy-agile p a {
  color: #fff;
  transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
  -ms-transition: 0.5s all;
}

.colorlibcopy-agile p a:hover {
  color: #000;
}

/*-- //copyright --*/
.wrapper {
  position: relative;
  overflow: hidden;
}

.colorlib-bubbles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.colorlib-bubbles li {
  position: absolute;
  list-style: none;
  display: block;
  width: 40px;
  height: 40px;
  background-color: rgba(255, 255, 255, 0.15);
  bottom: -160px;
  -webkit-animation: square 20s infinite;
  -moz-animation: square 250s infinite;
  -o-animation: square 20s infinite;
  -ms-animation: square 20s infinite;
  animation: square 20s infinite;
  -webkit-transition-timing-function: linear;
  -moz-transition-timing-function: linear;
  -o-transition-timing-function: linear;
  -ms-transition-timing-function: linear;
  transition-timing-function: linear;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -o-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}

.colorlib-bubbles li:nth-child(1) {
  left: 10%;
}

.colorlib-bubbles li:nth-child(2) {
  left: 20%;
  width: 80px;
  height: 80px;
  -webkit-animation-delay: 2s;
  -moz-animation-delay: 2s;
  -o-animation-delay: 2s;
  -ms-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-duration: 17s;
  -moz-animation-duration: 17s;
  -o-animation-duration: 17s;
  animation-duration: 17s;
}

.colorlib-bubbles li:nth-child(3) {
  left: 25%;
  -webkit-animation-delay: 4s;
  -moz-animation-delay: 4s;
  -o-animation-delay: 4s;
  -ms-animation-delay: 4s;
  animation-delay: 4s;
}

.colorlib-bubbles li:nth-child(4) {
  left: 40%;
  width: 60px;
  height: 60px;
  -webkit-animation-duration: 22s;
  -moz-animation-duration: 22s;
  -o-animation-duration: 22s;
  -ms-animation-duration: 22s;
  animation-duration: 22s;
  background-color: rgba(255, 255, 255, 0.25);
}

.colorlib-bubbles li:nth-child(5) {
  left: 70%;
}

.colorlib-bubbles li:nth-child(6) {
  left: 80%;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 3s;
  -moz-animation-delay: 3s;
  -o-animation-delay: 3s;
  -ms-animation-delay: 3s;
  animation-delay: 3s;
  background-color: rgba(255, 255, 255, 0.2);
}

.colorlib-bubbles li:nth-child(7) {
  left: 32%;
  width: 160px;
  height: 160px;
  -webkit-animation-delay: 7s;
  -moz-animation-delay: 7s;
  -o-animation-delay: 7s;
  -ms-animation-delay: 7s;
  animation-delay: 7s;
}

.colorlib-bubbles li:nth-child(8) {
  left: 55%;
  width: 20px;
  height: 20px;
  -webkit-animation-delay: 15s;
  -moz-animation-delay: 15s;
  animation-delay: 15s;
  -webkit-animation-duration: 40s;
  -moz-animation-duration: 40s;
  animation-duration: 40s;
}

.colorlib-bubbles li:nth-child(9) {
  left: 25%;
  width: 10px;
  height: 10px;
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-duration: 40s;
  animation-duration: 40s;
  background-color: rgba(255, 255, 255, 0.3);
}

.colorlib-bubbles li:nth-child(10) {
  left: 90%;
  width: 160px;
  height: 160px;
  -webkit-animation-delay: 11s;
  animation-delay: 11s;
}

@-webkit-keyframes square {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
    -moz-transform: translateY(-700px) rotate(600deg);
    -o-transform: translateY(-700px) rotate(600deg);
    -ms-transform: translateY(-700px) rotate(600deg);
    transform: translateY(-700px) rotate(600deg);
  }
}

@keyframes square {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
    -moz-transform: translateY(-700px) rotate(600deg);
    -o-transform: translateY(-700px) rotate(600deg);
    -ms-transform: translateY(-700px) rotate(600deg);
    transform: translateY(-700px) rotate(600deg);
  }
}

/*-- responsive-design --*/
@media(max-width:1440px) {
  input[type="text"], input[type="email"], input[type="password"] {
    width: 94%;
  }
}

@media(max-width:1366px) {
  h1 {
    font-size: 2.6em;
  }

  .agileits-top {
    padding: 2.5em;
  }

  .main-agileinfo {
    margin: 2em auto;
  }

  .main-agileinfo {
    width: 36%;
  }
}

@media(max-width:1280px) {
  .main-agileinfo {
    width: 40%;
  }
}

@media(max-width:1080px) {
  .main-agileinfo {
    width: 46%;
  }
}

@media(max-width:1024px) {
  .main-agileinfo {
    width: 49%;
  }
}

@media(max-width:991px) {
  h1 {
    font-size: 2.4em;
  }

  .main-w3layouts {
    padding: 2em 0 1em;
  }
}

@media(max-width:900px) {
  .main-agileinfo {
    width: 58%;
  }

  input[type="text"], input[type="email"], input[type="password"] {
    width: 93%;
  }
}

@media(max-width:800px) {
  h1 {
    font-size: 2.2em;
  }
}

@media(max-width:736px) {
  .main-agileinfo {
    width: 62%;
  }
}

@media(max-width:667px) {
  .main-agileinfo {
    width: 67%;
  }
}

@media(max-width:600px) {
  .agileits-top {
    padding: 2.2em;
  }

  input.email, input.text.w3lpass {
    margin: 1.5em 0;
  }

  input[type="submit"] {
    margin: 2em 0;
  }

  h1 {
    font-size: 2em;
    letter-spacing: 3px;
  }
}

@media(max-width:568px) {
  .main-agileinfo {
    width: 75%;
  }

  .colorlibcopy-agile p {
    padding: 0 2em;
  }
}

@media(max-width:480px) {
  h1 {
    font-size: 1.8em;
    letter-spacing: 3px;
  }

  .agileits-top {
    padding: 1.8em;
  }

  input[type="text"], input[type="email"], input[type="password"] {
    width: 91%;
  }

  .agileits-top p {
    font-size: 0.9em;
  }
}

@media(max-width:414px) {
  h1 {
    font-size: 1.8em;
    letter-spacing: 2px;
  }

  .main-agileinfo {
    width: 85%;
    margin: 1.5em auto;
  }

  .text:focus, .text:valid {
    background-position: 0 0px;
  }

  .wthree-text ul li, .wthree-text ul li:nth-child(2) {
    display: block;
    float: none;
  }

  .wthree-text ul li:nth-child(2) {
    margin-top: 1.5em;
  }

  input[type="submit"] {
    margin: 2em 0 1.5em;
    letter-spacing: 3px;
  }

  input[type="submit"] {
    margin: 2em 0 1.5em;
  }

  .colorlibcopy-agile {
    margin: 1em 0 1em;
  }
}

@media(max-width:384px) {
  .main-agileinfo {
    width: 88%;
  }

  .colorlibcopy-agile p {
    padding: 0 1em;
  }
}

@media(max-width:375px) {
  .agileits-top p {
    letter-spacing: 0px;
  }
}

@media(max-width:320px) {
  .main-w3layouts {
    padding: 1.5em 0 0;
  }

  .agileits-top {
    padding: 1.2em;
  }

  .colorlibcopy-agile {
    margin: 0 0 1em;
  }

  input[type="text"], input[type="email"], input[type="password"] {
    width: 89.5%;
    font-size: 0.85em;
  }

  h1 {
    font-size: 1.7em;
    letter-spacing: 0px;
  }

  .main-agileinfo {
    width: 92%;
    margin: 1em auto;
  }

  .text:focus, .text:valid {
    background-position: 0 0px;
  }

  input[type="submit"] {
    margin: 1.5em 0;
    padding: 0.8em;
    font-size: .85em;
  }

  .colorlibcopy-agile p {
    font-size: .85em;
  }

  .wthree-text label {
    font-size: 0.85em;
  }

  .main-w3layouts {
    padding: 1em 0 0;
  }
}





body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

/****************************************************************************************************************************************/
<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 256px;
  height:256px;
  background-color: red;

  color: #fff;
  text-align: center;
  border-radius: 8px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -100px;
  overflow-y: scroll;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -7px;
  border-width: 7px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
/****************************************************************************************************************************************/




</style>



<title>Intellise IT</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <script>
// When the user clicks on <div>, open the popup

</script>

 

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- start slider -->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
	<script type="text/javascript">
			$(function() {

				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});

			});
		</script>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg">
<div class="container" id="topis">
	<div class="row header">
		<div class="logo navbar-left" align="center">
			<center><img src="logo3.JPG" height="200px" width="600px"></center>
			
		</div>
		<!--<div class="h_search navbar-right">
			<form>
				<input type="text" class="text" value="Enter text here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter text here';}">
				<input type="submit" value="search">
			</form>
		</div>-->
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="container" style="background-color: black" >
	<div class="row h_menu" style="background-color: black;"  >
		<nav class="navbar navbar-default navbar-left" role="navigation" style="background-color:black;" >
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: black;">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="index.php">Home</a></li>
		        <li><a href="#courses">Courses</a></li>
		        <li><a href="#register">Register </a></li>
		        <li><a href="#owl-demo">Our Faculty</a></li>
				<li><a href="#about">About</a></li>
		      	<li><a href="feedback_display.php">Feedback From ex-students</a></li>
		        <li><a href="contact.php">Contact</a></li>
           
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right" style="background-color: #3b88ff">
			<ul class="list-unstyled text-center">
				<li><a href="https://www.facebook.com/INTELLISEIT/" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://www.instagram.com/intelliseit/" target="_blank"><i class="fa fa-instagram"></i></a></li>
				<li><a href="https://in.linkedin.com/in/sourabha-malve-a82602a9" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        
			</ul>	
		</div>
	</div>
</div>
<div align="center" class="slider_bg" style="background-image: url(hi.jpeg); background-position: center; background-size: 100% 250%"><!-- start slider -->
	<div class="container">
		<div id="da-slider" class="da-slider text-center">
			
			<div class="da-slide">
				<h2>
          <?php
             $query_is_this=mysqli_query($link,"SELECT * FROM `headings` WHERE 1");
             $row=mysqli_fetch_array($query_is_this);
             echo $row['heading'];
        
        ?></i></h2>
				<p><i><font color="red" style="font-size:1.5em;">
          <?php
            echo $row['description'];
          ?></font></i></p>
				<h3 class="da-link"><a href="intelliseinfo.pdf" class="fa-btn btn-1 btn-1e">view more</a></h3>
			</div>

      <div class="da-slide">
        <h2><i>
          <?php
            
             $row=mysqli_fetch_array($query_is_this);
             echo $row['heading'];
        
        ?></i></h2>
        <p><i><font color="red" style="font-size:1.5em;">
          <?php
            echo $row['description'];
          ?></font></i></p>
        <h3 class="da-link"><a href="intelliseinfo.pdf" class="fa-btn btn-1 btn-1e">view more</a></h3>
      </div>

      <div class="da-slide">
        <h2><i>
          <?php
             
             $row=mysqli_fetch_array($query_is_this);
             echo $row['heading'];
        
        ?></i></h2>
        <p><i><font color="red" style="font-size:1.5em;">
          <?php
            echo $row['description'];
          ?></font></i></p>
        <h3 class="da-link"><a href="intelliseinfo.pdf" class="fa-btn btn-1 btn-1e">view more</a></h3>
      </div>


      <div class="da-slide">
        <h2><i>
          <?php
             
             $row=mysqli_fetch_array($query_is_this);
             echo $row['heading'];
        
        ?></i></h2>
        <p><i><font color="red" style="font-size:1.5em;">
          <?php
            echo $row['description'];
          ?></font></i></p>
        <h3 class="da-link"><a href="intelliseinfo.pdf" class="fa-btn btn-1 btn-1e">view more</a></h3>
      </div>



	   </div>
	</div>
</div><!-- end slider -->




<div class="main_bg" id="courses"  style="background="#e3e3e3"><!-- start main -->

  

	<div class="container" style="background="#e3e3e3">
		<h1 align="center"><font font-family="Eras Bold ITC" size="20px">Courses</font></h1>
    <div style="background="#e3e3e3">
		<div class="main row" style="background="#e3e3e3">
      <?php
      $cquery=mysqli_query($link,"SELECT * FROM `courses` WHERE 1");
      while($crow=mysqli_fetch_assoc($cquery)){
			echo '<div class="col-md-3 images_1_of_4 text-center" style="height:700px;overflow-y:hidden;overflow-x:hidden;">
         <a  onclick="myFunction(\''.$crow['heading'].'\')" class="fa-btn btn-1 btn-1e"><img src="uploads/'.$crow['image'].'" height="200px" width="200px"></a>
        <h4><a onclick="myFunction(\''.$crow['heading'].'\')"><font color="grey">'.$crow['heading'].'</a></font></a></h4>
        <div class="popup">
        <span height="15px" width="15px" class="popuptext" id="'.$crow['heading'].'"><button onclick="myFunction(\''.$crow['heading'].'\')"><font color="black" size="2"><img align="left" height="16vh" width="16vh" src="cross.JPG"></font></button><br><font color="white" size="3">'.$crow['fdescription'].'</font></span>
        </div>
				<div style="overflow-y:hidden;height:300px;" height="50px" width="50px"><p class="para" style=""><font color="black" size="5">'.$crow['description'].'</font></p></div>
        <a  onclick="myFunction(\''.$crow['heading'].'\')" class="fa-btn btn-1 btn-1e">read more</a> 
        </div>';

      }


      ?>

			</div>
				
		</div>

      

  </div>

  <div id="thisistext">shown</div>

</div>
  
 


</div><!-- end main -->


<!--form123-->

<!--<div class="main-w3layouts wrapper" id="register">
		<h1>Register For a course</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">

				<form action="#" method="post">
					<pre>
					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					
					<input type="submit" value="SIGNUP">
					</pre>
				</form>
				<p>Don't have an Account? <a href="#"> Login Now!</a></p>
			</div>
		</div>-->
<!--<div style="background-color: #e3e3e3">
<h1 align="center">Register for a course</h1>
<div class="container"  id="register">
	
  <div style=""><h2 align="center"><font color="white" size="10" style="font-family:Eras Bold ITC">Registration Form</font></h2></div>
  <font size="5">
  <form action="registeraCourse.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email"><font color="white" style="font-family:Eras Bold ITC" size="4"><b>Name:<b></font></label>
      <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd"><font color="white" style="font-family:Eras Bold ITC" size="4"><b>Email:<b></font></label>
      <input type="email" class="form-control" id="pwd" placeholder="Enter Email" name="email">
    </div>

    
    <label for="pwd"><font color="white" style="font-family:Eras Bold ITC" size="4"><b>Select one course at a time:<b></font></label>
    <select class="form-control" name="course">
        <?php/*
          $qurty=mysqli_query($link,"SELECT * FROM `courses` WHERE 1");
          while($rowofco=mysqli_fetch_array($qurty)){
              echo '<option>'.$rowofco['heading'].'</option>';
          }*/
          ?>
          
    </select>
    
    <div class="form-group">
      <label for="pwd"><b>Upload Your Photo (Choose File):<b></label>
      <input type="file" id="afile" name="afile">
    </div>

    <button type="submit" class="btn btn-default" style="background-color:red"><font color="white" style="font-family:Eras Bold ITC" size="4">Submit</font></button>
  </form>
</font>
</div>
</div>-->
<!--New Form-->

<div class="main_btm" style="background-color: #e3e3e3e3" id="register"><!-- start main_btm -->
  <div class="container">
    <div class="main row">
          <!--<div class="col-md-4 company_ad">
            <h2>                   </h2>
              <address>
             <p>500 Lorem Ipsum Dolor Sit,</p>
             <p>22-56-2-9 Sit Amet, Lorem,</p>
             <p>USA</p>
              <p>Phone:(00) 222 666 444</p>
              <p>Fax: (000) 000 00 00 0</p>
            <p>Email: <a href="mailto:info@mycompany.com">info(at)mycompany.com</a></p>
              <p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
            </address>
        </div>-->
        
        
        <div class="col-md-8">
          
          <div class="contact-form">
            <h2>Enter Details:</h2>
              <form method="post" action="registeraCourse.php" enctype="multipart/form-data">
                <div>
                  <span>Your name</span>
                  <span><input type="" class="form-control" id="userName" name="name"></span>
                </div>
                <div>
                  <span>Phone Number</span>
                  <span><input type="username" class="form-control" id="inputEmail3" name="phone"></span>
                </div>
                <div>
                  <span>Upload Your Photo</span>
                  <span><input type="file" class="form-control" id="inputEmail3" name="afile"></span>
                </div>
                <span>Select Course</span>
                <select class="form-control" name="course">
                  <?php
                      $qurty=mysqli_query($link,"SELECT * FROM `courses` WHERE 1");
                      while($rowofco=mysqli_fetch_array($qurty)){
                      echo '<option>'.$rowofco['heading'].'</option>';
                  }
                  ?>
                </select>

               <div>
                  <label class="fa-btn btn-1 btn-1e"><font color="black"><input type="submit" value="Submit"></font></label>
              </div>
              </form>
            </div>
        </div>    
        <div class="clearfix"></div>    
  </div> 
</div>
</div>

<!-- end of new form-->




<?php
$query_is_this2=mysqli_query($link,"SELECT * FROM `headings2` WHERE 1");
 $row1=mysqli_fetch_array($query_is_this2);
$image123=$row1['image'];

?>
<br><br>

<div class="main_btm" id="about" style="background-color: #ffffff;overflow-x:scroll;"><!-- start main_btm -->
	<div class="container">
		<h1 align="center">About</h1>
		<div class="main row">
			<div class="col-md-6 content_left">
				<img height="210%" width="90%" src="uploads/<?php echo $image123?>" alt="" >
			</div>
			<div class="col-md-6 content_right" style="overflow-y:scroll;">
				<h1 style="font-size:5.8vh;"> <b>
          <?php

            echo $row1['heading'];

          ?></b>
        </h1>
				<p class="para" style="font-size:3.5vh;">
          <?php
            //if($query=mysqli_query($link,"SELECT * FROM 'headings2' WHERE 1")){
            //$row1=mysqli_fetch_array($query);
             echo $row1['description'];//}
          ?>

         </p>
        <a href="intelliseinfo.pdf"><font size="7">read more</font></a>

         </div>
       </div>
        <center>
  <div style="background-color:#e3e3e3;" align="center">
  <div align="center" class="container" style="background-color: #e3e3e3">
  

				<!----start-img-cursual---->
				<h1 align="center">Our Faculty<br><br></h1>
                               
					<div align="center" id="owl-demo" class="owl-carousel text-center" style="background-color:#e3e3e3">
						

						<?php
            $query_is_this3=mysqli_query($link,"SELECT * FROM `teachers` WHERE 1");
            while($row123=mysqli_fetch_assoc($query_is_this3))
            {
            echo '<div class="item">
							<div  align="center">
								<img class="lazyOwl" height="100%" width="100%" data-src="uploads/'.$row123['image'].'" alt="Lazy Owl Image">
							</div>
							<div class="cau_left">
								<h4><a href="https://in.linkedin.com/public-profile/in/sourabha-malve-a82602a9" target="_blank">'.$row123['heading'].'</a></h4>
								<p>
									'.$row123['description'].'
								</p>
							</div>
						</div>';
            }
            ?>
            </div>
					
	</div>
        
</div>
</div></div>
 </center>
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved | Design by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
			</div>
      <!--<div style="position:fixed;" >-->
    
    <!--</div>-->
		</div>
	</div>
</div>

<script>
  function myFunction(idisthis) {
    console.log(idisthis);
  var popup = document.getElementById(idisthis);
  popup.classList.toggle("show");
}
function myFunction1(){
  console.log(string);
  var popup = document.getElementById("aboutus");
  popup.classList.toggle("show");
}
</script>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<!--<div style="background-color:black;color:white;padding:30px">Scroll Down</div>
<div style="background-color:lightgrey;padding:30px 30px 2500px">This example demonstrates how to create a "scroll to top" button that becomes visible when the user starts to scroll the page.</div>
-->
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>