<?php
    //建立類別
    class User {
        //屬性
        public $name = 'NoBody';
        public $mail;
        public $age = 18;
        public $gender;
        private $level = 0;
        protected $test = 999;
        //方法
        function login(){
            $this->level = 10;
            echo $this->level;

        }
        function test(){
            echo $this->login();
        }

        static function title(){
            echo "HELLO";
        }

    }
    //建立實體
    // $user1 = new User;
    // $user1->name = 'John';
    // $user1->gender = 'Male';
    // echo $user1->mail;
    // $user1->test();
    // echo $user1->level;
    class Member extends User {
        function qwer(){
            echo $this->test;
        }
    }

    $member1 = new Member;
    echo $member1->qwer();

    User::title();