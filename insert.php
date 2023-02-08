<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include "dbcon.php";
if(isset($_POST['insertbtn'])){

$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$semester=$_POST['semester'];
$imagename=$_FILES['image']['name'];
$imagetmpname=$_FILES['image']['tmp_name'];
$imagesize=$_FILES['image']['size'];
$imagetype=$_FILES['image']['type'];
$folder="image/";

if(strtolower($imagetype)=='image/jpg' || strtolower($imagetype)=='image/jpeg' || 
strtolower($imagetype)=='image/png')
{
if($imagesize<=1000000)
{
$folder=$folder.$imagename;
$query="insert into students(name,gender,age,semester,image) values('$name','$gender','$age','$semester','$folder')";
$run=mysqli_query($con,$query);
if($run){

    echo"<script>alert('data inserted succesfully')</script>";
    move_uploaded_file($imagetmpname,$folder);

}
else{
    echo"insertion failed";
}
}

else{

}
}
else{
    echo"<script> alert('image not found');
    window.location.href='home.php' </script>";
}
}



?>
</body>
</html>