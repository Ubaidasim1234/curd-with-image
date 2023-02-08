<?php

include "dbcon.php";
$id=$_GET['id']??"";
$query="SELECT * FROM students WHERE id='$id'";
$run=mysqli_query($con,$query);
while($data=mysqli_fetch_array($run)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class ="container" style="padding:30px;">
    <div class ="row">
    <div class ="col-md-6">

<form action="" method="post" enctype="multipart/form-data">
 <input type="hidden" name="id" value="<?php echo $data[0];?>" />
<input class="form-control" type="text" name="name"  
placeholder="enter name" value="<?php echo $data[1];?>" required />

<select class="form-control"  name="gender" 
 placeholder="select gender" required >

<?php 
if($data[2]== "male"){
    echo "
    <option  value=''>Select gender</option>
    <option   value='male' selected>Male</option>
    <option  value='female'>Female</option>
    
    ";
}
else {
    echo "
    <option  value=''>Select gender</option>
    <option   value='male' >Male</option>
    <option  value='female' selected>Female</option>
    
    ";
}



?>
<!-- <option  class="form-control" value="">Select gender</option>
    <option  class="form-control" value="male">Male</option>
    <option class="form-control"  value="female">Female</option> -->
</select>

<input class="form-control"   type="number" name="age" 
placeholder="enter age" value="<?php echo $data[3];?>"/>
<input  class="form-control"  type="text" placeholder="enter semester" 
name="semester" value="<?php echo $data[4];?>"/>
<?php 
if($data[5]!="" && $data[5]!= null){
    echo "<img src='$data[5]' height='170' width='170'>";
}

?>

<input  class="form-control" type="file" name="image"  />
<input type="submit" value="update"  name="update" class= "btn btn-info"/>



</form>
</div>
</div>
</div>
</body>
</html>
<?php } ?>


<?php


if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$semester=$_POST['semester'];
$imagename=$_FILES['image']['name'];
$imagetmpname=$_FILES['image']['tmp_name'];
$imagesize=$_FILES['image']['size'];
$imagetype=$_FILES['image']['type'];
$folder="image/";
if(is_uploaded_file($_FILES['image']['tmp_name'])){
    echo "file given";
    if(strtolower($imagetype)=='image/jpg' || strtolower($imagetype)=='image/jpeg' || 
strtolower($imagetype)=='image/png')
{
if($imagesize<=1000000)
{
$folder=$folder.$imagename;
$query="update students set name='$name', gender='$gender', 
age ='$age', semester='$semester', image='$folder' where id='$id'";
$run=mysqli_query($con,$query);
if($run){

    move_uploaded_file($imagetmpname,$folder);
    echo"<script>alert('data updated succesfully');
    window.location.href='view.php';
    </script>";

}
else{
    echo"updation failed";
}
}

else{

}
}
else{
    echo"<script> alert('image not found');
    window.location.href='view.php' </script>";
}

}

else{
    echo "file not given";
    $query="update students set name='$name', gender='$gender', age ='$age', 
    semester='$semester' where id='$id'";
$run=mysqli_query($con,$query);
if($run){

    move_uploaded_file($imagetmpname,$folder);
    echo"<script>alert('data updated succesfully');
    window.location.href='view.php';
    </script>";

}
else{
    echo "updation failed";
}
}



}

?>