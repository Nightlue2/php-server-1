<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body style="background-image:url('paper.jpg');height:900px;background-position:center center;background-size:cover;background-repeat:no-repeat;">
  <div style="width:580px;height:360px;background:rgba(255,255,255,0.5);border-radius:20px;position:relative;top:27vh;left:34vw;">
    <p id="welcome">hello</p>
    <script>
    let user = "${sessionScope.username}";
    window.welcome.innerText = window.welcome.innerText + user;//未完成的页面
    
    </script>
  </div>
</body>
</html>