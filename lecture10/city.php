<?php
    // echo "Hello PHP";
    //$name = "Hello" //php宣告變數使用$
    //echo "<b>Hello</b> PHP<script>alert('Hello');</script>";//字串的串接 用'.'

    $name = $_REQUEST["name"]; //內建的全域變數 _REQUEST["xxx"]
    //echo $name;

    if ($name == "taipei") {
        echo "300 W";
    }else if ($name == "hsinchu") {
        echo "3 W";
    }else {
        echo "No Data";
    }


    /*
     網址:
     http://localhost:8080/city.php?name=程式名稱
     http://localhost:8080/city.php?name=Taipei

    */
?>