<head>
<title>留言内容</title>
<body>
<?php
$mysqli=new mysqli("mysql.sqlpub.com:3306","root122","35dcd9c1bff659a8","lt1234");
$sql = "SELECT * FROM `yy`";
$result = mysqli_query($mysqli, $sql);
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        $c = $row["1"];
        $time = $row["time"];
        echo "<br>"."<h4 style='color:grey;font-weight: 890;letter-spacing: 2px;'>.$time.发送//:</h4><h2 style='color:blue;'>".$c."</h2>";
    }
} else {
    echo "暂时无人留言呢";
}
?>
</body>
</head>