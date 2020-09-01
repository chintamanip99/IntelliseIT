<?php

ob_start();

$id=$_POST['id'];
$heading=$_POST['heading'];
$description=$_POST['description'];

$id=(int)$id;

echo $id+10;
echo $heading.$description;

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

echo mysqli_query($link,"UPDATE headings SET heading='$heading',description='$description',link='10' WHERE id='$id'");

header("Location:headings.php");

?>