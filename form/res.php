<?php
    //超級全域變數
    // // echo $_POST;
    // var_dump($_POST);
    // echo $_POST["name"];
    // echo $_POST["content"];

    // $name = $_POST["name"];
    // $mail = $_POST["mail"];
    // $gender = $_POST["gender"];
    // $edu = $_POST["edu"];
    // $skills = implode(",",$_POST["skills"]);
    $name = $_REQUEST["name"];
    $mail = $_REQUEST["mail"];
    $gender = $_REQUEST["gender"];
    $edu = $_REQUEST["edu"];
    $skills = implode(",",$_REQUEST["skills"]);

    echo "{$name}你好,你的mail為{$mail},性別是{$gender},學歷是{$edu},專長是{$skills}";
    // var_dump($skills);
    // echo $skills;

    // var_dump($_POST);
    // var_dump($_REQUEST);