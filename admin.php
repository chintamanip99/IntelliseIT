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

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">

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

</style>

  <title></title>
</head>
<body>


<div class="container" style="background-color: #3b88ff">
  <div class="row h_menu" style="background-color: black">
    <nav class="navbar navbar-default navbar-left" role="navigation" style="background-color:black">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="background-color: black" value="Menu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: black">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="index.php#courses">Courses</a></li>
            <li><a href="index.php#register">Register </a></li>
            <li><a href="index.php#owl-demo">Our Faculty</a></li>
        <li><a href="index.php#about">About</a></li>
            <li><a href="blog.html">Feedback From ex-students</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
        <!-- start soc_icons -->
    </nav>
    <div class="soc_icons navbar-right" style="background-color: #3b88ff">
      <ul class="list-unstyled text-center">
        <!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <!--<li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul> 
    </div>
  </div>
</div>

<br>

<h1 align="center">Table of headings</h1>

<br><br>

<center>
<div class="w3-container" style="width:1209px" style="background-color: #3b88ff">
<font size="4">
<table class="w3-table-all w3-hoverable" border="4" >
  <tr>
    <th>Id
    </th>
    <th>Heading
    </th>
    <th>Description
    </th>
  </tr>
  <?php
  $query_is_this=mysqli_query($link,"SELECT * FROM `headings` WHERE 1");
  while($row=mysqli_fetch_array($query_is_this)){
    echo "<tr><td>".$row['id']."</td><td>".$row['heading']."</td><td>".$row['description']."</td></tr>";
  }

  ?>
</table>
</font>
</div>
</center>

<h1 align="center">Change Headings and Descriptions</h1>
<div class="container" style="background-color:grey" id="register">
	
  <div style="background-color: #3b88ff"><h2 align="center"><font color="white" size="10" style="font-family:Eras Bold ITC">Enter following to change</font></h2></div>
  <form action="headingsChanges.php" method="post">
    <div class="form-group">
      <label for="email"><font color="white" style="font-family:Eras Bold ITC" size="4"><b>Id of row :<b></font></label>
      <input type="text" class="form-control" id="email" placeholder="Enter Id" name="id">
    </div>
    <div class="form-group">
      <label for="pwd"><font color="white" style="font-family:Eras Bold ITC" size="4"><b>Heading:<b></font></label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Heading" name="heading">
    </div>

   <!-- <div class="form-group">-->
    <label for="pwd"><font color="white" style="font-family:Eras Bold ITC" size="4"><b>Description:<b></font></label>
      <br>
      <textarea rows = "5" cols = "200" name = "description">
            
         </textarea>
    <!--</div>--><br>

    

    
    <button type="submit" class="btn btn-default" style="background-color:red"><font color="white" style="font-family:Eras Bold ITC" size="4">Submit</font></button>
  </form>
</div>
</body>
</html>