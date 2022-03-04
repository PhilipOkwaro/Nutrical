

<?php
session_start();
$connection=mysqli_connect('localhost','root','','nutricalc');
//$connection=mysqli_connect('localhost','root','write your password here')
if(!$connection)
{
  echo "Failed to connect";
}

$type=$_POST['type'];
$email=$_POST['emailid'];
$password=$_POST['password'];


$select="select * from register_table where email_id='$email' && password='$password' && type='$type'";
$result=mysqli_query($connection,$select);
while($row=mysqli_fetch_array($result))
{
  if($row['email_id']==$email && $row['password'] ==$password && $row['type']=='Admin')
  {
    header("location:admin.php");
  }
  elseif ($row['email_id']==$email && $row['password'] ==$password && $row['type']=='User')
   {

    header("location:app.php");

  }
}
?>
