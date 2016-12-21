<?php
include('connection.php');
session_start();
$ui=$_SESSION['user_id'];
$mode=$_SESSION['mode'];
$q=mysql_query("SELECT count from imgtrack where id=1");
$res=mysql_fetch_array($q);
//echo $res['count'];


$target_dir = "up/";
$target_file = $target_dir . basename($_FILES["image_file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
//echo "string";
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image_file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image_file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {


	$temp = explode(".",$_FILES["image_file"]["name"]);
$newfilename =$temp['0'] .$res['count']. '.' .end($temp);
//echo "<br>".$newfilename;

    if (move_uploaded_file($_FILES["image_file"]["tmp_name"], "up/" . $newfilename)) {
        echo "The file ". basename( $_FILES["image_file"]["name"]). " has been uploaded.Redirecting please wait...";
        $num=$res['count'];
        $num=$num+1;
        $pathtosave="up/".$newfilename;
        mysql_query("UPDATE imgtrack set count='$num'");
      	if($mode=="patient"){
      		mysql_query("UPDATE patients set propic='$pathtosave' where PatientId='$ui'");
      	}elseif ($mode=="psychiatrist") {
      		mysql_query("UPDATE psychiatrists set propic='$pathtosave' where PsychiatristId='$ui'");
      	}
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
if($mode=="patient"){
header("Refresh: 4; url=\"patient_prof.php\"");
}elseif ($mode=='psychiatrist') {
    header("Refresh: 4; url=\"psy_prof.php\"");
}

?>