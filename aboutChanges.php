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

/////////////////////////////////////////////////////////////////////////////////////



$exte=end(explode(".",$_FILES["afile"]["name"]));
$name="uploads/".$_POST['image'].".".$exte;
move_uploaded_file($_FILES["afile"]["tmp_name"], $name);


$image=$_POST['image'].".".$exte;
$heading=$_POST['heading'];
$description=$_POST['description'];
echo mysqli_query($link,"UPDATE `headings2` SET `image`='$image',`heading`='$heading',`description`='$description' WHERE `id`=3");
header("Location:headings.php");

?>