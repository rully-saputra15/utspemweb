<?php
    include_once '../include/db_connection.php';
    session_start();
    $post;$file;
    if(isset($_POST['posts'])){
        $post = $_POST['posts'];
    }
    if(isset($_POST['file'])){
        $file = $_POST['file'];
        echo $file;
    }
    echo $_SESSION['id'];
    $target_dir = "../asset/img/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uok = 1;

    if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)){
        echo "file has been uploaded";
    }else{
        echo "error upload the photo";
    }

    $tmp = new DB();
    $tmp->insertPost($_SESSION['id'],$post,$file);
    include '../view/profile.php';
?>