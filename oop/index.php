<?php
    //建立類別
    class User {
        //屬性
        public $name = 'NoBody';
        public $mail;
        public $age = 18;
        public $gender;
        private $level = 0;
        //方法
        function login(){
            $this->level = 10;
            echo $this->level;

        }
        function test(){
            echo $this->login();
        }

    }
    //建立實體
    $user1 = new User;
    $user1->name = 'John';
    $user1->gender = 'Male';
    echo $user1->mail;
    $user1->test();
    // echo $user1->level;