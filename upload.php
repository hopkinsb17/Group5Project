<?php
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
printf($target_file);
$uploadOk = 1;
$Message = "File:";
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = is_uploaded_file($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    delete($target_file);
}
// Check file size
//if ($_FILES["fileToUpload"]["size"] > 500000) {
  //  echo "Sorry, your file is too large.";
    //$uploadOk = 0;
//}

// Allow certain file formats
if($imageFileType != "csv"){
    $Message = "Only CSV files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $Message = $Message + "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
         $Message = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
         $Message = "Sorry, there was an error uploading your file.";
    }
}
echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('" + $Message + "'); </SCRIPT>");
        //window.location.href='<URL to redirect to>'

?>