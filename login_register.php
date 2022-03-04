<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nutrical</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="full-page">
        <div class='navbar'>
            <div class='logo'>
                <a href='#'><hi>Nutrical</h1></a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'>Home</a></li>
                    <li><button class='loginbtn'onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                    <li><button class='loginbtn'onclick="document.getElementById('register-form').style.display='block'" style="width:auto;">Register</button></li>
                </ul>
            </nav>
        </div>
        <div class="sub-page">
          <div class="overlay"></div>
           <div class="text">
               <p>It is important for everyone to watch their diet, whether one wants to lose weight, gain weight or to just maintain a healthy lifestyle.<br> Failure to track your calories, poor nutrition and unhealthy eating habits can cause mild effects such as tooth decay<br> to more severe ones such as cardiovascular disease, high blood pressure, several cancers and even type - 2 diabetes</p>
            </div>
        </div>
        <div id='login-form' class="login-page">
          <div class="form-box">
                <span onclick="document.getElementById('login-form').style.display='none'" class="close">&times;</span>
                <div class="form">
                    <form class='login-form', action="validate.php", method="post">
                        <center><h1 class="main-heading">Login</h1></center>
                        <select name="type">
                          <option value="-1">Select user type</option>
                            <option value="Admin">Admin</option>
                              <option value="User">User</option>


				       <input type="email"name='emailid' placeholder="Email ", required/>
				        <input type="password" name='password' placeholder="password", required/>
              
				        <button>LOGIN</button>
				    </form>
                </div>
            </div>
        </div>
        <div id="register-form" class='register-page'>
            <div class="form-box1">
               <span onclick="document.getElementById('register-form').style.display='none'" class="close">&times;</span>
                <div class="form1">
                    <form class='register-form', action="registration.php", method="post">
                        <center><h1 class="main-heading">Register</h1></center>
				        <input type="text" name='user'placeholder="user name" required/>
				        <input type="text" name='emailid'placeholder="email" required/>
                <input type="tel" name='phonenumberid'placeholder="phone number"pattern="[0-9]{10}" required/>
				        <input type="password"name='password' placeholder="password" required/>
				        <button>REGISTER</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
