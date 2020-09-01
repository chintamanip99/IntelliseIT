<?php
ob_start();
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

/*$exte=end(explode(".",$_FILES["afile"]["name"]));
$iname="students/".$_POST['name'].".".$exte;
move_uploaded_file($_FILES["afile"]["tmp_name"], $iname);*/

$name=$_POST['name'];
$phone=$_POST['phone'];
$message=$_POST['usermsg'];

$otp_entered="jk";

if(mysqli_query($link,"INSERT INTO `contact`( `name`, `phone`, `message`) VALUES ('$name','$phone','$message')")==1){
echo "<h1>We have received your request , we will reach out to you soon , Thank You</h1>";
}else{
echo "Something went wrong!";
}
header("refresh:2;url=index.php");
/*header("Location:http://api.msg91.com/api/sendhttp.php?route=4&sender=ShubhP&mobiles=".$phone."&authkey=263374ANT1bhEx48UZ5c6923bf&message=Your otp from ShubhPharals is ".$otp_entered."&country=91");*/
?>