<?php
$a=$_POST["1"];
$b=date("y/m/d/w");
    $mysqli=new mysqli("mysql.sqlpub.com:3306","root122","35dcd9c1bff659a8","lt1234");
    
    if(isset($_POST["2"])){
        $sql="INSERT INTO `yy` (`1`, `time`) VALUES ('$a', '$b')";
        $mysqli->query($sql);
        echo "发送成功内容:".$a."<a href='index.html'>点击返回上一页面</a>";
    }
?>