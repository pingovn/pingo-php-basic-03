<?php 	

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
    echo "The file ".  basename( $_FILES['file']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}
echo "<br/>";
var_dump(scandir("upload"));
echo "<br/>";
echo getcwd();
echo "<br/>";
?>

<!DOCTYPE html>
<html>
<body>
<form action="File_Sample.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
