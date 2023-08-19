<head>
<title>注册我的用户名</title>
<body>
<?php
$c=$_GET["namess"];
$e=$_GET["password"];
    $mysqli=new mysqli("mysql.sqlpub.com:3306","root122","35dcd9c1bff659a8","lt1234");
        $sql="INSERT INTO `name` (`name`, `password`) VALUES ('$c', '$e')";
        $mysqli->query($sql);
        echo("<a href='./7.php?name=$c&password=$e'>请点此处进入聊天室</a>");
?>
</body>
</head>