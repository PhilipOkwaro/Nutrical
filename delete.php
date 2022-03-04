
<!DOCTYPE html>
<html lang="en">
  <title>Delete data</title>
</head>
<body>
  <centre>
    <h1>Delete Data From Database</h1>
    <form action ="" method="post">
      <input type="text" name = "emailid"/>
      <input type="submit" name ="Delete" value ="Delete Data"/>
    </form>
  </centre>
</body>
</html>
<?php
$connection=mysqli_connect('localhost','root','','nutricalc');
//$connection=mysqli_connect('localhost','root','write your password here')
if(!$connection)
{
  echo "Failed to connect";
}
$email=$_POST['emailid'];


$query="DELETE FROM 'register_table' WHERE email_id='$email";
$query_run = mysqli_query($connection,$query);

if ($query_run)
{
echo'<script type ="text/javascript"> alert("Data Delete")</script>';
}
else
{
echo'<script type ="text/javascript"> alert("Data Delete")</script>';
}
?>
