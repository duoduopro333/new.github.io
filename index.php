<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
      <title>登录到我的留言板</title>
    </head>
    <body>
    <div style="margin-left:auto;margin-right: auto;margin-top: 500px;height: 500px;width: 900px;background-image: url(160.png);background-size: 100% 100%;">
    <div style="background-color: rgba(30,30,30,0.45);height: 200px;width: 200px;top:640px;position: fixed;left: 400px;border-radius:15% ;">
    <form action="0.php" method="get" novalidate>  
    <label for="name"><i style="color:#FFD946 ;">用户名</i></label>
    <input type="text" name="names" style="margin-top: 0px;border-radius: 10%;box-shadow: 5px 5px 10px rgba(0,0,0,0.4);" placeholder="请输入您的用户名(仅可为数字)" id="name">
    <label for="password"><i style="color: #FFD946;">密码</i></label>
    <input type="text" name="password" style="margin-top: 5px;border-radius: 10%;box-shadow: 5px 5px 10px rgba(0,0,0,0.4);"placeholder="请输入您的密码(仅可为数字)" id="password">
    <input type="submit" name="a" style="margin-top: 10px;box-shadow: 5px 5px 10px rgba(0,0,0,0.4);border-radius:10%;" value="登录">
    <i style="color: #FFD946;letter-spacing: 0.15;">*若无帐号则进行注册</i>
    </form>
    </div>
    </div>
    <?php
        echo "1.5";
    ?>
    
    </body>
</html>        