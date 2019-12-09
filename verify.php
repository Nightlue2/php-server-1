<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  //session_start();
  header("Content-type: text/html; charset=utf-8");
  $conn = mysql_connect("localhost","root","root");
  $sql = "CREATE DATABASE user";
  mysql_query("create database user",$conn);
  mysql_select_db("user",$conn);
  mysql_set_charset('utf8',$conn);
  $sql = "create table pw(
    username varchar(30) primary key,
    password varchar(30)
  )";
  mysql_query($sql,$conn);
  $sql = "insert into pw(username,password) values ('王靖然','1715303')";
  mysql_query($sql,$conn);
  $sql = "insert into pw(username,password) values ('Mike','1715301')";
  mysql_query($sql,$conn);
  $sql = "insert into pw(username,password) values ('Amy','1715302')";
  mysql_query($sql,$conn);
  if(strpos($_POST['username']," ' ")){exit('输入存在危险!已拒绝服务');}//防止sql注入
  else{
    $sql = "select username,password from pw where username = '$_POST[username]' and password = '$_POST[password]' "; //从interface.php获取输入框数据
    $res = mysql_fetch_array(mysql_query($sql));
    if($res['username']){
      echo "hello";//返回hello字符串
    }else{
      echo "error";//返回error字符串
    }
  }
  mysql_close($conn);
  ?>
</body>
</html>