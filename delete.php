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
$id=$_GET['id']??"";
$query="delete from students where id='$id'";
$run=mysqli_query($con,$query);
if($run){
    echo "<script>alert('data Deleted succesfully');
    window.location.href='view.php';
    </script>";
}
else {
    echo "<script>alert('data Deletion failed');
    window.location.href='view.php';
    </script>";
}

?>
</body>
</html>