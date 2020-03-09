<?php
    include_once '../include/db_connection.php';
    $email ; $pass; $first_name;$last_name;$birthdate;$sex;
    if(isset($_POST['first_name']))$first_name = $_POST['first_name'];   
    if(isset($_POST['last_name']))$last_name = $_POST['last_name'];
    if(isset($_POST['email']))$email = $_POST['email'];   
    if(isset($_POST['pass']))$pass = $_POST['pass'];
    if(isset($_POST['birthdate']))$birthdate = $_POST['birthdate'];
    if(isset($_POST['radio']))$sex = $_POST['radio'];
    $tmp = new DB();
    $db = $tmp->getDB();
    $ciphertext = $tmp->login($pass);
    $query = "INSERT INTO user (first_name,last_name,email,pass,birth_date,sex) VALUES('$first_name','$last_name','$email','$ciphertext','$birthdate','$sex')";
    $result = $db->query($query);

    echo 'sukses!';
?>