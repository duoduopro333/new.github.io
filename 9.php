<head>
<title>登录或注册</title>
<body>
<body>
    <?php
$nam=$_GET["names"];
$passwo=$_GET["password"];
$mysqli=new mysqli("mysql.sqlpub.com:3306","root122","35dcd9c1bff659a8","lt1234");
$sqli = "SELECT `password` FROM `name` WHERE `name` = $nam ";
$k = $mysqli->query($sqli)->fetch_assoc();
if (isset($_GET["2"])){
    

if ($k)
{  
if ($k["password"] === $passwo)
    {
        echo ("<a href='./7.php?name=$nam'>点此处登录聊天室</a>");
    }
    else
    {
        echo("密码错误，请重试");
    }
}
else
{
    echo("<a href='./6.php?namess=$nam & password=$passwo'>此用户名尚未注册，点此注册用户名</a>");
}
}
?>
</body>
</body>
</head>