<?php
    include_once '../include/db_connection.php';
    session_start();
    $comment;$id_post;
    if(isset($_POST['comment'])){
        $post = $_POST['comment'];
    }
    if($_GET['id_post']){
        $id_post = $_GET['id_post'];
    }
    $tmp = new DB();
    $tmp->insertComment($_SESSION['id'],$id_post,$post);
    include '../view/profile.php';
?>