<?php
$c=$_GET["name"];
$a=$c.":".$_POST["1"];
date_default_timezone_set("PRC");
$b=date("Y年m月d日/星期w/H时i分s秒");
$d=mt_rand(1,100);
    $mysqli=new mysqli("mysql.sqlpub.com:3306","root122","35dcd9c1bff659a8","lt1234");
    
    if(isset($_POST["2"])){
        $sql="INSERT INTO `yy` (`1`, `time`, `name`, `password`) VALUES ('$a', '$b', '$c', '$c')";
        $mysqli->query($sql);
        echo "代号".$d."."."发送成功内容:".$a."<a href=./7.php?name=$c>点击返回上一页面</a><br>";
       echo "<script>alert('发送成功')</script>";
    }
?>