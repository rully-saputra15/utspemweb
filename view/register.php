<!DOCTYPE HTML>
<Html>
    <head>
        <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="../asset/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    </head>
    <body>
    <img class="wave" src="../asset/img/wave.gif">
        <div class="container">
        <div class="login-content">
                <form action="../controller/register.php" method="post">
				<h2 class="title" style="font-family: 'Neometric Medium'; font-size: 52px;">Get Started with Us!!</h2>
				<a>Please Fill In All The Fields Below</a></br>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-portrait"></i>
					</div>
					<div class="div">
						<h5>First Name</h5>
						<input type="text" class="input" name="first_name">
					</div>
				</div>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-portrait"></i>
					</div>
					<div class="div">
						<h5>Last Name</h5>
						<input type="text" class="input" name="last_name">
					</div>
				</div>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Username</h5>
						<input type="text" class="input" name="username">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" class="input" name="pass">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Confirm Password</h5>
						<input type="password" class="input" name="pass">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-birthday-cake"></i>
					</div>
					<div class="div">
						<input name="birthdate" id="date" type="date" min="1960-04-01" max="2030-04-30" >
					</div>
				</div>
				<br>
				
				<div class="col-half">
					<h5>Select Gender :</h5>
					<div class="input-group">
						<input type="radio" name="radio" value="L" id="gender-male" />
						<label for="gender-male">Male</label>
						<input type="radio" name="radio" value="P" id="gender-female" />
						<label for="gender-female">Female</label>
					</div>
				</div>
				<div class="input-div pass"></div><br>


				<div class="input-div one">
					<div class="i">
						<i class="fas fa-home"></i>
					</div>
					<div class="div">
						<h5>Home Town</h5>
						<input type="text" class="input">
					</div>
				</div>


				<input type="submit" class="btn" value="Submit">
				<a style="font-size: 18px;">Coco ©2020</a>
                </form>
            </div>
        </div>
        </div>
        <script type="text/javascript" src="../asset/js/main.js"></script>
    </body>
</Html>