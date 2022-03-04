<?php
//session_start();

$connection=mysqli_connect('localhost','root','','nutricalc');
//$connection=mysqli_connect('localhost','root','write your password here')
if(!$connection)
{
  echo "Failed to connect";
}

$Proteins=$_POST['Proteins'];
$Carbohydrates=$_POST['Carbohydrates'];
$Vitamins=$_POST['Vitamins'];

//$sql = "INSERT INTO users (`Email`, `Calorie_intake`, `Meal_plan`) VALUES ('','$calcBMR','');"
$query = "INSERT INTO 'meal_plan' (`Proteins`, `Carbohydrates`, `Vitamins`) VALUES ('$Proteins','$Carbohydrates','$Vitamins');"
//mysqli_query($connection,$query);

//mysqli_query($link,$sql);
/*if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);*/

  header("location:app.php")
?>
