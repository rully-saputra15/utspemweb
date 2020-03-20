<!DOCTYPE HTML>
<Html>
    <head>
	<link rel="stylesheet" type="text/css" href="../asset/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <script src="https://www.google.com/recaptcha/api.js"></script>
    </head>
    <body>
    <?php
        include_once '../model/user.php';
        include_once '../include/db_connection.php';

        $db = new DB();
        $database = $db->getDB();
    ?>
    	<div class="loader">
		<img src="../asset/img/loading.gif" alt="Loading..." />
	</div>
	<img class="wave" src="../asset/img/wave.gif">
        <div class="container">
		<div class="img">
			<img src="../asset/img/bg.png">
		</div>
        <div class="login-content">
                <form action="../controller/dashboard.php" method="post">
                <h2 class="title" style="font-family: 'Neometric Medium'; font-size: 52px;">Welcome To Coco</h2>
				<a>Easy and Simple Social Media App.</a></br>
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
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LfvjtkUAAAAAPHyy95SFOxQrAeRs_L4oTizihUZ" style="margin-bottom: 10px;"></div>
                </div>
				<a href="#">Forgot Password?</a>
				<input type="submit" class="btn" value="Login">
				<input type="submit" class="btn" value="Register">
				<a style="font-size: 18px;">Coco ©2020</a>
            </div>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="../asset/js/main.js"></script>
	<script>
		window.addEventListener("load", function () {
			const loader = document.querySelector(".loader");
			loader.className += " hidden"; // class "loader hidden"
		});
	</script>
    </body>
</Html>