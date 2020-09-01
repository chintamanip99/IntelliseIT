<?php

function validate_mobile($mobile)
{
  return preg_match("/^[0-9]*$/", $mobile);
}

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


$name=$_POST['name'];
$phone=$_POST['phone'];
$course=$_POST['course'];

if(!preg_match("/^\d{10}+$/", $phone) || empty($_POST['phone']) || empty($_POST['name']) || empty($_POST['course'])){

echo '<script>alert("Invalid Phone Number or  name or course not entered!")</script>';


}else{

$exte=end(explode(".",$_FILES["afile"]["name"]));
$iname="students/".$_POST['name'].".".$exte;
move_uploaded_file($_FILES["afile"]["tmp_name"], $iname);



mysqli_query($link,"INSERT INTO `registrations`(`name`, `phone`, `course`,`image`) VALUES ('$name','$phone','$course','$iname')");
header("Location:index.php#register");
	
}
?>