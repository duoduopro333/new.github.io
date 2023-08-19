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
                    <li style=";"><h1><a href="5.php">点击这里查看公告栏</a></h1>
        </div>
        <div style="width:100%;position:fixed;top:500px;background-color:#B8B8B8;height:180px;">
            <form>
                <input type="text" name="1" maxlength="255" style="width: 820px;border: 1px black solid;line-height: 3;margin-left: 30px;margin-top: 15px;padding: 10px;">
                <input type="reset" style="height: 70px;width: 100px;border-radius: 10%;box-shadow:5px 5px 5px rgba(0,0,0,0.4);" value="登录后可发送">
    </form>
                <form action="9.php" method="get" novalidate>
                 <input type="text" name="names" style="height:30px ;width:70px ;margin:30px ;border: 1px black solid;padding: 10px;" value="<?php echo $_GET['names'] ?>"<i style="font-weight: 900;"><--您确定使用这网名吗，如果是请点确定</i>
                 <i>//您所输入的密码</i><input type="text" name="password" style="margin-top: 0px;"value="<?php echo $_GET['password']?>">
                <input type="submit" value="确定" style=" border-radius:10%;height: 100px;width: 200px;box-shadow: 5px 5px 5px rgba(0,0,0,0.4);" name="2">
            </form>
            <tr>
            <table border cellspacing="0">
        <th>当前版本号</th>
        <th>更新时间</th>
        
        </tr>
        <tr>
        <td>1.5</td>
        <td>2023.9</td>
        </tr>
        </div>
        
    </div>
</body>

</html>