<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>请登录~(´∀`)~</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">></script>
</head>
<body style="background-image:url('paper.jpg');height:900px;background-position:center center;background-size:cover;background-repeat:no-repeat;">
  <form method="post" style="position:fixed;top:36%;left:43%;">
  <div style="background-color:rgba(41,82,63,69%);margin-right:-20%;margin-left:-4%;padding-top:6%;padding-bottom:12%;border-radius:14px;color:rgba(255,255,255,50%);">
    <span style="display:inline-block;margin-left:6%;">用户名</span><input type="text" name="username" id="name" style="display:inline-block;margin-top:7%;margin-left:3%;opacity:0.47;border:0;auto-complete:off;"><br>
    <span style="display:inline-block;margin-left:12%;">密码</span><input type="password" name="password" id="word" style="display:inline-block;margin-top:7%;margin-left:3%;opacity:0.47;border:0;auto-complete:off;"><br>
    <div style="padding-top:11%;padding-left:44%;">
      <button type="submit" class="button" style="color:rgba(255,255,255,0.6);background:rgba(255,255,255,0.3);border:0;">
       登录
      </button>
    </div>
  </div>
  </form>
  <script>
  $(".button").click(function(){
    $.ajax({
      url:'verify.php',
      type:'post',
      dataType:'text',
      data:{
        username:$("input[name='username']").val(),
        password:$("input[name='password']").val()
      },
      async:true,
      beforeSend:function(xhr){
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded;charset=UTF-8");
      },
      success:function(result){
        console.log("haha");//没有执行
        if(XMLHttpResponseText === "hello"){
          window.location.href = "hello.php";
        }else{
          alert('用户名或密码输入错误!');
        }
      },
      error:function(er){
        console.log("error");//没有执行
      }
    });
  })
  </script>
</body>
</html>