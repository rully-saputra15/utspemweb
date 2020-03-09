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
    }

?>