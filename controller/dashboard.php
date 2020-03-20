<?php
    include_once '../include/db_connection.php';
    $username ; $password;
    session_start();
    if(isset($_POST['username']))$username = $_POST['username'];   
    if(isset($_POST['pass']))$password = $_POST['pass'];
    if(isset($_POST['g-recaptcha-response'])) $captcha=$_POST['g-recaptcha-response'];
    if(!$captcha){
        echo "<h2>Please check the captcha form</h2>";
        exit;
    }
    $str = "https://www.google.com/recaptcha/api/siteverify?secret=6LfvjtkUAAAAAPFwxt-tBUCfvgQOSasQiVQE0dLg"."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR'];

    $response = file_get_contents($str);
    $response_arr = json_decode($response,true);
    if($response_arr["success"] === 0){
        echo "<h2>You are spammer ! GET OUT</h2>";
        include '../view/login.php';
    }else{
        $tmp = new DB();
        $db = $tmp->getDB();
        $ciphertext = $tmp->login($password);
        $query = "SELECT username,ID_user from USER WHERE username = '$username' AND pass='$ciphertext'";
        $result = $db->query($query);
        foreach($result as $nil){
            if($nil[0] == $username){
                $_SESSION['id'] = $nil[1];
                include '../view/profile.php';
            }else{
                include '../view/profile.php';
            }
        }
    }

?>