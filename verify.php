<?php
  header("Content-type: application/json; charset=utf-8");
  $conn = mysql_connect("localhost","root","root");
  mysql_select_db("user",$conn);
  // $sql = "insert into pw(username,password) values ('Amy','1715302')";
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "select username,password from pw where username = {$username} and password = {$password}";
  $result = mysql_query($sql, $conn);
  $res = mysql_fetch_array($result);
  mysql_close($conn);
  exit json_encode($res);
?>