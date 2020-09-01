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

html {
  scroll-behavior: smooth;
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


<div class="container" style="background-color: #3b88ff" style="position:fixed;">
  <div class="row h_menu" style="background-color: black;position:fixed;" >
    <nav class="navbar navbar-default navbar-left" role="navigation" style="background-color:black;position:fixed;">
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
            <li class="active"><a href="#headings">Headings</a></li>
            <li><a href="#registrations">See Registrations</a></li>
            <li><a href="#feedbacks">Manage Feedbacks</a></li>
            <li><a href="#contact">Manage Contact </a></li>
            <li><a href="#upabout">Update About</a></li>
            <li><a href="#teachers">Update Teachers</a></li>
            <li><a href="#courses">Update Courses</a></li>
            
          </ul>
        </div><!-- /.navbar-collapse -->
        <!-- start soc_icons -->
    </nav>
    
  </div>
</div>

<br><br><br><br><br>

<h1 align="center">Table of headings</h1>

<br><br>

<center>
<div class="w3-container" style="width:1209px" style="background-color: #3b88ff" id="headings">
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
  $query_is_this=mysqli_query($link,"SELECT * FROM `headings` ORDER BY id desc");
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
  <font size="5">
  <form action="headingsChanges.php" method="post">
    <div class="form-group">
      <label for="email"><b>Id of row :<b></label>
      <input type="text" class="form-control" id="email" placeholder="Enter Id" name="id">
    </div>
    <div class="form-group">
      <label for="pwd"><b>Heading:<b></label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Heading" name="heading">
    </div>

   <!-- <div class="form-group">-->
    <label for="pwd"><b>Description:<b></label>
      <br>
      <input type="text" name="description">
    <!--</div>--><br>

    

    
    <input type="submit"  value="Make Changes" style="background-color:red">
  </form>
</font>
</div>

<div id="upabout">
  <h1 align="center">Update About</h1>

  <div class="container" style="background-color:grey">
  
  <div style="background-color: #3b88ff"><h2 align="center"><font color="white" size="10" style="font-family:Eras Bold ITC">Enter following to change</font></h2></div>
  <font size="5">
  <form action="aboutChanges.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email"><b>Heading :<b></label>
      <input type="text" class="form-control" id="email" placeholder="Enter Id" name="heading">
    </div>
    <div class="form-group">
      <label for="pwd"><b>Description :<b></label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Heading" name="description">
    </div>

    <div class="form-group">
      <label for="pwd"><b>Name of image :<b></label>
      <input type="text" class="form-control"  name="image">
    </div>

    

    <div class="form-group">
      <label for="pwd"><b>Upload Image (Choose File):<b></label>
      <input type="file" id="afile" name="afile">
    </div>



   <!-- <div class="form-group">-->
    
    <!--</div>--><br>

    

    
    <input type="submit"  value="Make Changes" style="background-color:red">
  </form>
</font>
</div>

</div>

<br>

<h1 align="center">Table of Teachers in DB</h1>

<br><br>



<div id="teachers">

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
    <th>
      Image
  </th>
  </tr>
  <?php
  $query_is_this=mysqli_query($link,"SELECT * FROM `teachers` WHERE 1");
  while($row=mysqli_fetch_array($query_is_this)){
    echo "<tr><td>".$row['id']."</td><td>".$row['heading']."</td><td>".$row['description']."</td><td>".'<img width="50%" height="30%" src="uploads/'.$row['image'].'">'."</td></tr>";
  }

  ?>
</table>
</font>
</div>
</center>

<h1 align="center">Update Teachers in DB</h1>

  <div class="container" style="background-color:grey">
  
  <div style="background-color: #3b88ff"><h2 align="center"><font color="white" size="10" style="font-family:Eras Bold ITC">Enter following to change</font></h2></div>
  <font size="5">
  <form action="teachersChanges.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email"><b>Name :<b></label>
      <input type="text" class="form-control" id="email" placeholder="Enter Id" name="heading">
    </div>
    <div class="form-group">
      <label for="pwd"><b>Description :<b></label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Heading" name="description">
    </div>



    <div class="form-group">
      <label for="pwd"><b>Name of image :<b></label>
      <input type="text" class="form-control"  name="image">
    </div>

    <div class="form-group">
      <label for="pwd"><b>Upload Image (Choose File):<b></label>
      <input type="file" id="afile" name="afile">
    </div>

    



   <!-- <div class="form-group">-->
    
    <!--</div>--><br>

    

    
    <input type="submit"  value="Make Changes" style="background-color:red">
  </form>
</font>
</div>

</div>

<div class="container" style="background-color:grey">
  
  <div style="background-color: #3b88ff"><h2 align="center"><font color="white" size="10" style="font-family:Eras Bold ITC">Enter following to change</font></h2></div>
  <font size="5">
  <form action="deleteTeachers.php" method="post">
    

    <div class="form-group">
      <label for="pwd"><b>Id (Only to Delete):<b></label>
      <input type="text" class="form-control"  name="id">
    </div>



   <!-- <div class="form-group">-->
    
    <!--</div>--><br>

    

    
    <input type="submit"  value="Make Changes" style="background-color:red">
  </form>
</font>
</div>

</div>

<div id="courses">

<!--Table of contents-->
<center>
  <h1 align="center">Courses</h1>
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
    <th>Full Description
    </th>
    <th>
      Image
  </th>
  </tr>
  <?php
  $query_is_this78=mysqli_query($link,"SELECT * FROM `courses` WHERE 1");
  while($row78=mysqli_fetch_array($query_is_this78)){
    echo "<tr><td>".$row78['id']."</td><td>".$row78['heading']."</td><td>".$row78['description']."</td><td>".$row78['fdescription']."</td><td>".'<img width="200px" height="200px" src="uploads/'.$row78['image'].'">'."</td></tr>";
  }

  ?>
</table>
</font>
</div>
</center>
<!--End of table of contents-->

<!--Begin change courses form--><br><br>
<h1 align="center">Add or delete a course</h1>
<br><br>
<div class="container" style="background-color:grey">
  
  <div style="background-color: #3b88ff"><h2 align="center"><font color="white" size="10" style="font-family:Eras Bold ITC">Enter following to change</font></h2></div>
  <font size="5">
  <form action="coursesChanges.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email"><b>Heading :<b></label>
      <input type="text" class="form-control" id="email" placeholder="Enter Id" name="heading">
    </div>
    <div class="form-group">
      <label for="pwd"><b>Description :<b></label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Heading" name="description">
    </div>

    <div class="form-group">
      <label for="pwd"><b>Full Description :<b></label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Heading" name="fdescription">
    </div>

    <div class="form-group">
      <label for="pwd"><b>Link :<b></label>
      <input type="text" class="form-control"  name="link">
    </div>


    <div class="form-group">
      <label for="pwd"><b>Name of image :<b></label>
      <input type="text" class="form-control"  name="image">
    </div>

    <div class="form-group">
      <label for="pwd"><b>Upload Image (Choose File):<b></label>
      <input type="file" id="afile" name="afile">
    </div>

    



   <!-- <div class="form-group">-->
    
    <!--</div>--><br>

    

    
    <input type="submit"  value="Make Changes" style="background-color:red">
  </form>
</font>
</div>

</div>


<div class="container" style="background-color:grey">
  
  <div style="background-color: #3b88ff"><h2 align="center"><font color="white" size="10" style="font-family:Eras Bold ITC">Enter following to change</font></h2></div>
  <font size="5">
  <form action="deleteCourses.php" method="post" enctype="multipart/form-data">
    

    <div class="form-group">
      <label for="pwd"><b>Id (Only to Delete):<b></label>
      <input type="text" class="form-control"  name="id">
    </div>



   <!-- <div class="form-group">-->
    
    <!--</div>--><br>

    

    
    <input type="submit"  value="Delete Record" style="background-color:red">
  </form>
</font>
</div>

</div>

<div id="registrations">
<!--Table of contents-->
<center>
  <h1 align="center">Registrations</h1>
<div class="w3-container" style="width:1209px" style="background-color: #3b88ff">
<font size="4">
<table class="w3-table-all w3-hoverable" border="4" >
  <tr>
    <th>Id
    </th>
    <th>Name
    </th>
    <th>Email
    </th>
    <th>Course
    </th>
    <th>
      Image
  </th>
  </tr>
  <?php
  $query_is_this7854=mysqli_query($link,"SELECT * FROM `registrations` WHERE 1 ORDER BY id DESC");
  while($row7854=mysqli_fetch_array($query_is_this7854)){
    echo "<tr><td>".$row7854['id']."</td><td>".$row7854['name']."</td><td>".$row7854['phone']."</td><td>".$row7854['course']."</td><td>".'<img width="200px" height="200px" src="'.$row7854['image'].'">'."</td></tr>";
  }

  ?>
</table>
</font>
</div>

</div>
</center>

<div class="container" style="background-color:grey">
  
  <div style="background-color: #3b88ff"><h2 align="center"><font color="white" size="10" style="font-family:Eras Bold ITC">Enter following to change</font></h2></div>
  <font size="5">
  <form action="deleteRegistrations.php" method="post">
    

    <div class="form-group">
      <label for="pwd"><b>Id (Only to Delete):<b></label>
      <input type="text" class="form-control"  name="id">
    </div>



   <!-- <div class="form-group">-->
    
    <!--</div>--><br>

    

    
    <input type="submit"  value="Make Changes" style="background-color:red">
  </form>
</font>
</div>

</div>

<div id="feedbacks">

  <h1 size="5" align="center">Manage feedbacks</h1>

  <center>
<div class="w3-container" style="width:1209px" style="background-color: #3b88ff">
<font size="4">
<table class="w3-table-all w3-hoverable" border="4" >
  <tr>
    <th>Id
    </th>
    <th>Name
    </th>
    <th>Phone
    </th>
    <th>Image
    </th>
    <th>
      Feedback
  </th>
  <th>
      Permission to display on website : 1==>Yes , 0==>No
  </th>
  </tr>
  <?php
  $query_is_this679=mysqli_query($link,"SELECT * FROM `feedbackfromexstudents` WHERE 1");
  while($row679=mysqli_fetch_array($query_is_this679)){
    echo "<tr><td>".$row679['id']."</td><td>".$row679['name']."</td><td>".$row['phone']."</td><td>".'<img width="50%" height="30%" src="'.$row679['image'].'">'."</td><td>.".$row679['feedback']."</td><td>".$row679['permission']."</tr>";
  }

  ?>
</table>
</font>
</div>
</center>

<h1 align="center">Update Feedbacks in DB</h1>

  <div class="container" style="background-color:grey">
  
  <div style="background-color: #3b88ff"><h2 align="center"><font color="white" size="10" style="font-family:Eras Bold ITC">Enter Id of feedback to show/hide</font></h2></div>
  <font size="5">
  <form action="feedbackChanges.php" method="post">
     <span>Select Id:</span>
        <select class="form-control" name="id">
                  <?php
                      $qurty1235=mysqli_query($link,"SELECT * FROM `feedbackfromexstudents` WHERE 1");
                      while($rowofco1235=mysqli_fetch_array($qurty1235)){
                      echo '<option>'.$rowofco1235['id'].'</option>';
                  }
                  ?>
        </select>
   <!-- <div class="form-group">-->
    
    <!--</div>--><br>
    <span>Permission to show feedback of selected id: 1 for show ,, 0 for Dont show.</span>
        <select class="form-control" name="permission">
                <option>1</option>
                <option>0</option>
        </select>
    <br><br>
  <input type="submit"  value="Make Changes" style="background-color:red">
  </form>

<div style="background-color: #3b88ff"><h2 align="center"><font color="white" size="10" style="font-family:Eras Bold ITC">Enter Id of feedback to Delete</font></h2></div>
  <font size="5">

<form action="deleteFeedbacks.php" method="post">
     <span>Select Id/Name:</span>
        <select class="form-control" name="id">
                  <?php
                      $qurty1235=mysqli_query($link,"SELECT * FROM `feedbackfromexstudents` WHERE 1");
                      while($rowofco1235=mysqli_fetch_array($qurty1235)){
                      echo '<option>'.$rowofco1235['id'].'</option>';
                  }
                  ?>
        </select>
   <!-- <div class="form-group">-->
    
    <!--</div>--><br>
    
    
  <input type="submit"  value="Make Changes" style="background-color:red">
  </form>


</font>
</div>


  
</font>
</div>

</div>

<div id="contact">
<!--Table of contents-->
<center>
  <h1 align="center">Contact</h1>
<div class="w3-container" style="width:1209px" style="background-color: #3b88ff">
<font size="4">
<table class="w3-table-all w3-hoverable" border="4" >
  <tr>
    <th>Id
    </th>
    <th>Name
    </th>
    <th>Phone
    </th>
    <th>Subject
    </th>
    
  </tr>
  <?php
  $query_is_this78545=mysqli_query($link,"SELECT * FROM `contact` WHERE 1");
  while($row78545=mysqli_fetch_array($query_is_this78545)){
    echo "<tr><td>".$row78545['id']."</td><td>".$row78545['name']."</td><td>".$row78545['phone']."</td><td>".$row78545['message']."</td></tr>";
  }

  ?>
</table>
</font>
</div>

</div>
</center>

<div class="container" style="background-color:grey">
  
  <div style="background-color: #3b88ff"><h2 align="center"><font color="white" size="10" style="font-family:Eras Bold ITC">Enter following to change</font></h2></div>
  <font size="5">
  <form action="deleteContact.php" method="post">
    

    <div class="form-group">
      <label for="pwd"><b>Id (Only to Delete):<b></label>
      <input type="text" class="form-control"  name="id">
    </div>



   <!-- <div class="form-group">-->
    
    <!--</div>--><br>

    

    
    <input type="submit"  value="Make Changes" style="background-color:red">
  </form>
</font>
</div>

</div>


</body>
</html>