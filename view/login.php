<!DOCTYPE HTML>
<Html>
    <head>
        <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
        <script src="https://www.google.com/recaptcha/api.js"></script>
    </head>
    <body>
    <?php
        include_once '../model/user.php';
        include_once '../include/db_connection.php';

        $db = new DB();
        $database = $db->getDB();
    ?>
        <div class="container">
            <div class="row">
                <form action="../controller/dashboard.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="email" id="email" name="email">       
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" id="password" name="password">                
                </div>
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LfvjtkUAAAAAPHyy95SFOxQrAeRs_L4oTizihUZ" style="margin-bottom: 10px;"></div>
                </div>
                <div class="form-row">
                <div class="col" style="margin:8px;">
                    <button class="btn btn-primary" id="submit" name="submit">Submit</button>
                    <button class="btn " id="cancel" name="cancel">cancel</button>
                </div>
            </div>
                </form>
            </div>
        </div>
    </body>
</Html>