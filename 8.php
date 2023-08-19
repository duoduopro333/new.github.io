<?php
$c=$_GET["name"];
date_default_timezone_set("PRC");
$b=date("Y年m月d日/星期w/H时i分s秒");
    $mysqli=new mysqli("mysql.sqlpub.com:3306","root122","35dcd9c1bff659a8","lt1234");
    
    if(isset($_POST["2"])){
        $sql="INSERT INTO `yy` (`1`, `time`, `name`) VALUES ('注册成功', '$b', '$c')";
        $mysqli->query($sql);
        echo $c."注册成功:"."<a href=./7.php?name=$c>点击返回上一页面</a>";
    }
?>