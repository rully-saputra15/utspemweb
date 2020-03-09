<?php
    include_once '../include/db_connection.php';
    $email ; $password;
    if(isset($_POST['email']))$email = $_POST['email'];   
    if(isset($_POST['password']))$password = $_POST['password'];
    if(isset($_POST['g-recaptcha-response'])) $captcha=$_POST['g-recaptcha-response'];
    if(!$captcha){
        echo "<h2>Please check the captcha form</h2>";
        exit;
    }
    $str = "https://www.google.com/recaptcha/api/siteverify?secret=6LfvjtkUAAAAAPFwxt-tBUCfvgQOSasQiVQE0dLg"."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR'];

    $response = file_get_contents($str);
    $response_arr = (array)json_encode($response);
    print_r($response_arr);
    if($response_arr["success"] === false){
        echo "<h2>You are spammer ! GET OUT</h2>";
        include '../view/login.php';
    }else{
        $tmp = new DB();
        $db = $tmp->getDB();
        $ciphertext = $tmp->login($password);
        $query = "SELECT email from USER WHERE email = '$email' AND pass='$ciphertext'";
        $result = $db->query($query);
        foreach($result as $nil){
            if($nil[0] == $email){
                echo 'masuk';
            }else{
                include '../view/login.php';
            }
        }
    }

?>