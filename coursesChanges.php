<?php

ob_start();
$mysql_host='fdb25.awardspace.net';
$mysql_user='2967600_regallclass';
$mysql_password='intelliseit@123';
if($link=@mysqli_connect($mysql_host,$mysql_user,$mysql_password)){
    if(@mysqli_select_db($link,'2967600_regallclass')){
        echo "success";
    }
}
else{
    die("Cant connect to database!!sorry"); 
}

function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output;
}

/////////////////////////////////////////////////////////////////////////////////////

/*$id=$_POST['id'];
$id=(int)$id;
if(isset($id)){
	$query=mysqli_query($link,"DELETE FROM `courses` WHERE `courses`.`id`='$id'");
	//echo $query;
}else{*/

$exte=end(explode(".",$_FILES["afile"]["name"]));
$name="uploads/".$_POST['image'].".".$exte;
move_uploaded_file($_FILES["afile"]["tmp_name"], $name);

//$id=$_POST['id'];
$link2=$_POST['link'];
$image=$_POST['image'].".".$exte;
$heading=$_POST['heading'];
$description=$_POST['description'];



$description=substrwords($description,300);



$fulldescription=$_POST['fdescription'];

echo $heading.$description.$image.$fulldescription;

echo mysqli_query($link,"INSERT INTO `courses` (`heading`, `description`,`link`.`fdescription`) VALUES ('$heading','$description','$fulldescription')");

//}
//header("Location:headings.php");
?>