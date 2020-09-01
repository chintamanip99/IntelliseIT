
<!--<div class="header_bg1">-->
<div class="container" id="topis">
	<div class="row header">
		<div class="logo navbar-left">
			<h1><a href="index.html">Intellise IT. </a></h1>
		</div>
		
		<div class="clearfix"></div>
	</div>
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
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
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="index.html">Home</a></li>
		        <li><a href="#fform">Give your feedback</a></li>
		        <!--<li><a href="about.html">Page 2</a></li>
		        <li class="active"><a href="blog.html">Page 3</a></li>
		        <li><a href="contact.html">Page 4</a></li>-->
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<!--<div class="soc_icons navbar-right">
			<!--<ul class="list-unstyled text-center">
				<!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
				<!--<li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
				<!--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
				<!--<li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
				<!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
			<!--</ul>	-->
		<!--</div>-->
	</div>
	<div class="clearfix"></div>
	</div>
<!--</div>-->


<style>
  
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
 
html{
	scroll-behavior:smooth;
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
  background-color: blue;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

}

</style>






<!--<div class="col-md-8 blog_right" style=" ">
				<h1 align="center">Change Headings and Descriptions</h1>
<div class="container" style="background-color:grey" id="register" >
	
  <div style="background-color: #3b88ff"><h2 align="center"><font color="white" size="10" style="font-family:Eras Bold ITC">Enter following to change</font></h2></div>
  <font size="5">
  <form action="insert_feedback.php" method="post">
    
    <div class="form-group">
      <label for="pwd"><b>Name:<b></label>
      <input type="text" class="form-control"  placeholder="Enter Name" name="name">
    </div>
	<div class="form-group">
      <label for="pwd"><b>email id:<b></label>
      <input type="text" class="form-control"  placeholder="Enter email id" name="email">
    </div>
	

   <!-- <div class="form-group">-->
    <!--<label for="pwd"><b>Feedback/Reviews:<b></label>
      <!--<br>
      <input type="text" placeholder="Write about your experience with INTELLISE IT." name="description">
    <!--</div>-->
	<!--<br>

    

    
    <input type="submit"  value="SUBMIT" style="background-color:red">
  </form>
</font>
</div>

	</div>
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

//$sql="SELECT * FROM feedback from ex-students" ;
$records=mysqli_query($link,"SELECT * FROM `feedback from ex-students` WHERE 1");



?>




<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FEEDBACK by Ex-students</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
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
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="main row">
			
			<?php
			
			while($student=mysqli_fetch_array($records))
			{
			echo '
			<div class="col-md-8 blog_left">
				<h2>'.$student['name'].'</h2>
				<img src="uploads/'.$student['image'].' " alt="" height="300" width="50" />
				<div class="blog_list">
					  <ul class="list-unstyled">
						<!--<li><i class="fa fa-calendar-o"></i><span>June 3, 2013</span></li>-->
						<!--<li><a href="#"><i class="fa fa-comment"></i><span>Comments</span></a></li>-->
				  		<!--<li><a href="#"><i class="fa fa-user"></i><span>Admin</span></a></li>-->
				  		<!--<li><a href="#"><i class="fa fa-eye"></i><span>124 views</span></a></li>-->
					  </ul>
				</div>
				<p class="para"><font size="5"> '.$student['feedback'].' </font></p>
				
			</div> ';
			}
			?>
			
			
			<div class="clearfix"></div>
		</div>
	</div>
</div><!-- end main -->


<h1 align="center">Tell us about your experience....</h1>
<div class="container" style="background-color:#e3e3e3e3" id="fform">
	
  <div style="background-color: #3b88ff"><h2 align="center"><font color="white" size="10" style="font-family:Eras Bold ITC">FEEDBACK FORM</font></h2></div>
  <font size="5">
  <form action="insert_feedback.php" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
      <label for="pwd"><b>Name:<b></label>
      <input type="text" class="form-control"  placeholder="Enter Name" name="name">
    </div>
	<div class="form-group">
      <label for="pwd"><b>email id:<b></label>
      <input type="text" class="form-control"  placeholder="Enter email id" name="phone">
    </div>
	

    <div class="form-group">
    <label for="pwd"><b>Feedback/Reviews:<b></label>
      <br>
      <input type="text" class="form-control" placeholder="Write about your experience with INTELLISE IT." name="description">
    </div>
	<br>

    

    
    <input type="submit"  value="SUBMIT" style="background-color:red">
	
  </form>
</font>


<div style="position:fixed;">
<a href="#topis"><img src="arrow.jpg" height="100" width="100"></a>
</div>	

</div> 

	
			
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved | Design by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
			</div>
		</div>
	</div>
</div>


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




