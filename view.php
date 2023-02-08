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
    <div class="container" style="padding:30px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
<?php
include "dbcon.php";
$query="SELECT * from students";
$run=mysqli_query($con,$query);
$totalrows=mysqli_num_rows($run);

if($totalrows!=0){
?>
<table class="table 
table-borderd table-striped table-hover table-responsive">
    <tr>
        <th colspan="8" class="text-center"><h2>Student Detail</h2></th>
</tr>
<tr>
<th>Id</th>
<th>Name</th>
<th>Gender</th>
<th>Age</th>
<th>Semester</th>
<th>Image</th>
</tr>

<?php
while($data=mysqli_fetch_array($run))
{
echo"

<tr>
<td>".$data[0]."</td>
<td>".$data[1]."</td>
<td>".$data[2]."</td>
<td>".$data[3]."</td>
<td>".$data[4]."</td>
<td><img src='$data[5]' height='80' width='80'></td>

<td><a href='update.php?id=$data[0]'>Edit</a></td>
 <td><a href='delete.php?id=$data[0]' onclick='return confirmation()'>Delete</a></td> 


</tr>";

}

}



?>
</table>
</div>
</div>
</div>
</body>
</html>
<script>
    function confirmation(){
        return confirm('Are you sure to delete data?')
    }
    </script>


