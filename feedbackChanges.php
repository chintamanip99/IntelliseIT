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

$id=$_POST['id'];
$permission=$_POST['permission'];

$id=(int)$id;

echo $id."     ".$permission;

echo mysqli_query($link,"UPDATE `feedbackfromexstudents` SET `permission`=$permission WHERE `feedbackfromexstudents`.`id`=$id");

header("Location:headings.php");

?>