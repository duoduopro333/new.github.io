<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <style type="text/css">
   a{
       text-decoration:none;
       color: yellow;
       }
       i:hover{
       color: pink;
       }
   </style>
    <title>留言板</title>
</head>

<body>
    <div style="height: 100%;width:100%;background-color:rgba(10,4,19,0.4);border:1px pink solid;">
        <div style="height:50px;width: 100%;background-color:#2EAFFF;border: 2px black solid;">
            <div style="height: 50px;width: 80px;line-height: 3;;"><i>首页</i></div>  <div style="height: 50px;width: 80px;background-color: ;display: inline-block;margin-left: 200px;"><i></i></div>            <div style="height: 50px;width: 80px;background-color: ;display: inline-block;margin-left: 200px;"><i></i></div>  <div style="height: 50px;width: 80px;background-color: ;display: inline-block;margin-left: 200px;"><i></i></div>
        </div>
        <div style="background-image: url(backgroundimage.png);background-size: 100% 100%;height: 450px;width: 500px;margin-left: auto;margin-right: auto;background-attachment: scroll;">
                <ol>页面功能如下
                    <li><h1><a href="3.php">点击这里查看留言内容</a></h1>
                    <li><h1><a href="5.php">点击这里查看公告栏</a></h1>
                    <li><h1><a href="download.html">历史版本下载</a></h1></li>
        </div>
        <div style="width:100%;position:fixed;top:500px;background-color:#B8B8B8;height:180px;">
            <form action="./1.php?name=<?php echo($_GET['name'])?>" method="post" novalidate>
                <input type="text" name="1" maxlength="255" style="width: 820px;border: 1px black solid;line-height: 3;margin-left: 30px;margin-top: 15px;padding: 10px;">
                <input type="submit" name="2" value="发送" style="border: 0.5px grey solid;line-height: 5;width: 100px;background-color:#43C9F4;border-radius: 10%;box-shadow:5px 5px 5px rgba(0,0,0,0.4);">
                <input type="reset" style="height: 70px;width: 100px;border-radius: 10%;box-shadow: 5px 5px 5px rgba(0,0,0,0.4);" value="复原">
    </form>
                <form action="">
                 <i><?php echo $_GET["name"]; ?></i><i style="font-weight: 900;"><--您所使用的网名</i>
            </form>
            <tr>
            <table border cellspacing="0">
        <th>当前版本号</th>
        <th>更新时间</th>
        
        </tr>
        <tr>
        <td>1.5测试</td>
        <td>2023.9</td>
        </tr>
        </div>
        
    </div>
</body>

</html>