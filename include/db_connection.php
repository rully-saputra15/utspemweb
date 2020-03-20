<?php
    class DB extends PDO{
        private $db;
      function __construct()
      {
        $host = "localhost";
        //Ini adalah user yang digunakan untuk login ke dalam module mysql / mariadb
        $username = "root";
    
        //Ini adalah nama database yang digunakan dalam praktikum ini 
        $dbname = "utspemweb";
    
        //Ini adalah password yang untuk autentikasi user
        $password = "";
    
        //Object database
        $this->db = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);
        
      }
      function getDB()
      {
          return $this->db;
      }
      function login($password){
        $ivlen = openssl_cipher_iv_length('aes-256-ctr');
        $iv = '1234567890123456';
        $ciphertext = base64_encode(openssl_encrypt($password,'aes-256-ctr','256', OPENSSL_RAW_DATA,$iv));
        return $ciphertext;
      }
      function getPost(){
         $query = "SELECT a.id , a.status,CONCAT(b.first_name,' ',b.last_name),a.status_foto
         FROM post a , user b 
         WHERE a.ID_user = b.ID_user";
         $result = $this->db->query($query);
         return $result;
      }

     function getComment($id){
      $query = "SELECT a.comment 'comment',CONCAT(b.first_name,' ',b.last_name)'nama'
      FROM post_comment a , user b 
      WHERE a.ID_user = b.ID_user
      AND a.ID_post = '$id'";
     // print_r($query);
      $result = $this->db->query($query);
      return $result;
    }
    function insertPost($id,$post,$photo){
      $date = date('Y-m-d');
      $query = " INSERT INTO post(ID_user,status,status_foto,date) VALUES('$id','$post','$photo','$date')";
      $this->db->query($query);
    }
    function insertComment($id,$id_post,$comment){
      $query = " INSERT INTO post_comment(ID_user,ID_post,comment) VALUES('$id','$id_post','$comment')";
      $this->db->query($query);
    }
    }

?>