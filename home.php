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

        <form action="insert.php" method="post" enctype="multipart/form-data">
<input class="form-control"  type="text" name="name"  placeholder="enter name" required>

<select class="form-control"  name="gender"  placeholder="select gender" required>
    <option  class="form-control" value="">Select gender</option>
    <option  class="form-control" value="male">Male</option>
    <option class="form-control"  value="female">Female</option>
</select>

<input class="form-control"   type="number" name="age" placeholder="enter age">
<input  class="form-control"  type="text" placeholder="enter semester" name="semester">
<input  class="form-control" type="file" name="image" required>
<input type="submit" value="insert"  name="insertbtn" class= "btn btn-info">



</form>
</div>
</div>
</div>
</body>
</html>