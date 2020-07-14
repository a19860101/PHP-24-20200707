<?php
    var_dump($_SERVER);
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["HTTP_HOST"];
    echo "<br>";
    echo $_SERVER["QUERY_STRING"];
    echo "<br>";
    echo $_SERVER["REQUEST_URI"];
    echo "<br>";
    echo $_SERVER["HTTP_USER_AGENT"];
    echo "<br>";
    
    $domain = $_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]."?".$_SERVER["QUERY_STRING"];

    echo $domain;