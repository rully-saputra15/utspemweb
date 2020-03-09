<!DOCTYPE HTML>
<Html>
    <head>
        <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form action="../controller/register.php" method="post">
                <div class="form-group">
                    <label>First name</label><br>
                    <input type="text" id="first_name" name="first_name">       
                </div>
                <div class="form-group">
                    <label>Last name</label><br>
                    <input type="text" id="last_name" name="last_name">                
                </div>
                <div class="form-group">
                    <label>Email</label><br>
                    <input type="email" id="email" name="email">       
                </div>
                <div class="form-group">
                    <label>Password</label><br>
                    <input type="password" id="pass" name="pass">                
                </div>
                <div class="form-group">
                    <label>Birthdate</label><br>
                    <input type="date" id="birthdate" name="birthdate">       
                </div>
                <div class="form-row">
                    <div class="col" style="margin:8px;">
                        <input type="radio" name="radio" value="L">Laki-Laki
                        <input type="radio" name="radio" value="P">Perempuan
                    </div>              
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