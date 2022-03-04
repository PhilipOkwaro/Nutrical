<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <a href="https://icons8.com/icon/ujOYHf-NDCgu/end-button"></a>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <title>Meal Plan</title>
      <link rel="stylesheet" href="style.css">

      </head>
      <body background : grey;>

      	<header class="header">
      		<h2 class="u-name">Nutri <b>calc</b>
      	</header>
<script type="text/javascript">

function calcBMR(){
  var weight = parseFloat(document.bmrform.weight.value);
    var height = parseFloat(document.bmrform.height.value);
      var age = parseInt(document.bmrform.age.value);
      var bmr = 66.47 +(13.75 * weight) + (5.003 * height) - (6.755 * age)
      document.bmrform.bmr.value = Math.round(bmr*100)/100.0;

}
</script>

    </div>
</div>
<div class="bg-white"><br>
    <div class="container">
                        <div class="ml-2 p-2 text-light" style="background-color: rgb(107,142,35);"><b>BMR(Basal Metabolic Rate)</b></div>
                <p>Your BMR is the amount of energy you expend each day when at rest.</p>
                <p>This Calculator allows you to calculate not only the number of calories you burn when inactive<!p>
                  <p>But also a daily calorie figure that takes into account your lifestyle activity level. </p>


                    <form method="post" action="mealdb.php" name="bmrform">
                        <fieldset>
                         <legend> BMR calculator</Legend>
                          <label for="">Weight in kgs:</label>
                         <input type="text" id="weight" value="" size="20" placeholder="Enter weight in kgs" name="weight"required >
                        <br>
                        <label for="">Height in cm:</label>
                       <input type="text" id="height" value="" size="20" placeholder="Enter height in cms" name="height"required >
                      <br>
                      <label for="">Enter age in years:</label>
                     <input type="text" id="age" value="" size="20" placeholder="Enter Age in years" name="age"required >
                    <br>
                    <input type="reset" value="Reset">
                    <input type="button" value="Calculate BMR" onclick="calcBMR();" id =" calc">
                    <br>
                    <label for="">BMR:</label>
                   <input type="text" value="Kcal/day" size="20" placeholder="Result - BMR" name="BMR" id="bmr"readonly >
                 </fieldset>
               </form>


       					<a href="#">
                  <img src="https://img.icons8.com/material-sharp/24/000000/end-button.png"/>
       						<!--<i class="fa fa-power-off" aria-hidden="true"></i>-->
                     <a href="meal.php"><button>Choose Meal plan</button></a>
       					<!--	<span>Logout</span>-->
       					</a>




<div class="container  mt-5 p-3">
        <div class="ml-2 p-2" style="background-color: rgb(135, 156, 42);">
    <b >Benefits of you being Healthy</b></div>
        <p class="ml-3 h5 p-2">Apart from reducing the risk of the health conditions, maintaining a healthy weight offers additional benefits:</p>
    <div class="container">
    <ul>
        <li >Fewer joint and muscle pains.</li>
        <li >Increased energy and ability to join in more activities.</li>
        <li>Improved regulation of bodily fluids and blood pressure.</li>
        <li >Reduced burden on the heart and circulatory system.</li>
        <li >Improved sleep patterns.</li>
    </ul>
    </div>
</div>

<div class="container  mt-5 p-3">
        <div class="ml-2 p-2" style="background-color: rgb(135, 156, 42);">
    <b >BMI and health</b></div>
    <ul>
        <li><h5>Body fat is relevant, not body mass</h5></li>
        <p>As far as health is concerned, excess body fat is negative. In contrast, an above-average muscle mass is more likely to be positive.</p>
        <p>The BMI does not distinguish between body fat and fat-free mass. Yet statistics show that the body mass index of about 73 percent of the people is quite a significant indicator of the body fat percentage.</p>
        <p>Thus, in three out of four cases, the BMI seems to have a significant relevance to health and in one out of four cases it does not seem to have any.</p>
        <li><h5>Body fat percentage vs. BMI</h5></li>
        <p>Despite its high relevance to health, the body fat percentage has its shortcomings. Scales for measuring body fat are simple to use but imprecise; the more accurate methods are very complicated and require skilled personnel.</p>
        <p>The BMI, in contrast, can be calculated from two simple measurements which are reliable in most cases.</p>
        <p>This seems to be the main reason why the BMI is still the most widely used value for estimating the body fat.</p>
    </ul>

</div>



                  <img src="https://img.icons8.com/material-rounded/24/000000/home-buton.png"/>

                     <a href="app.php"><button>Home</button></a>
       					<!--	<span>Logout</span>-->



</body>

</html>
