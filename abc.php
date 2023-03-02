<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<form action="abc.php"method="POST">
 <label for="rollno">roll no:</label><br>
  <input type="text" id="rollno" name="rollno"><br><br>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  
  <input type="submit"  name="submit" value="Submit">
</form> 
</body>
</html>

<?php
    class database
    {
        public function insert()
        {
        $con=mysqli_connect("localhost","root","","test");
        if(isset($_REQUEST['roll']))
    {
        $roll=$_REQUEST['roll'];
        $name=$_REQUEST['name'];
        $sql="INSERT INTO `student`(`roll`, `name`) VALUES ('$roll','$name')";
        mysqli_query($con,$sql);
    }
        }
    }
        $obj=new database;
        $obj->insert();
?>