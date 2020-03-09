<?php
    class User
    {
        private $ID_user;
        private $first_name;
        private $last_name;
        private $email;
        private $birth_date;
        private $sex ;

        function __construct($ID_user,$first_name,$last_name,$email,$birth_date,$sex)
        {
            $this->ID_user = $ID_user;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email = $email;
            $this->birth_date = $birth_date;
            $this->sex = $sex;
        }
        
    }

?>