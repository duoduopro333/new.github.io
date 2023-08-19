<head>
<title>公告栏</title>
<body>
<?php
    $mysqli=new mysqli("mysql.sqlpub.com:3306","root122","35dcd9c1bff659a8","lt1234");
    $sql="SELECT * FROM `3`";
    $mon=mysqli_query($mysqli,$sql);
        if (mysqli_num_rows($mon) > 0){
    while ($kk = mysqli_fetch_assoc($mon)){
    $f=$kk["1"];
    $tt=$kk["time"];
    echo($tt.$f."<br>");
}
}
else{
    echo("暂时无公告");
}
?>
</body>
</head>