
<!DOCTYPE html>
<html>
   <head>
      <title>Meal</title>
   </head>
   <body>
      <p>Choose meal plan according to the appropriate food group:</p>
     <form action="mealdb.php" method="post">
      <label for="Proteins">Choose a protein:</label>

         <select>
            <option value = "Beans">Beans</option>
            <option value = "Beef">Beef</option>
            <option value = "Pork">Pork</option>
            <option value = "Chicken">Chicken</option>
            <option value = "Lamb">Lamb</option>
            <option value = "Fish">Fish</option>
         </select>
         <br>
         <br>
         <label for="Carbohydrates">Choose a cabohydrates:</label>

            <select name = "cabohydrates">
               <option value = "Bread">Bread</option>
               <option value = "Rice">Rice</option>
               <option value = "Chapati">Chapati</option>
               <option value = "Ugali">Ugali</option>
               <option value = "Potatoes">Potatoes</option>
               <option value = "Spaghetti">Spaghetti</option>
            </select>
            <br>
            <br>
            <label for="vitamins">Choose a vitamin:</label>

               <select name = "Vitamins">
                  <option value = "Orange">Orange</option>
                  <option value = "Strawberries">Strawberries</option>
                  <option value = "Grapes">Grapes</option>
                  <option value = "Broccoli">Broccoli</option>
                  <option value = "Apple">Apple</option>
                  <option value = "Kiwi">Kiwi</option>
                  <option value = "Pears">Pears</option>
               </select>
               <br>
               <br>
               <button>Submit</button>
      </form>
   </body>
</html>
<?php
//index.php
