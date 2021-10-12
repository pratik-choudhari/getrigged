<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/navfootmedia.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/footer_css.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
      body
      {
        background-color: #000000;
        background-image: url('../images/cooling.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100% 100%;
        height:800px;
       }
      .navcontainer
      {
        display: grid;
        grid-template-columns: 35% 65%;
        grid-auto-rows: 80px;
        width:100%;
        height:150px;
      }
      div .nav
      {
        display: block;
        padding-top: 5px;
      }
      ul.nav
      {
        list-style-type: none;
        overflow: hidden;
        float: right;
        font-family: 'Muli', sans-serif;
        position: sticky;
        font-size: 22px;
      }
      .nav li
      {
        float: left;
      }
      .nav li a
      {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
      }
      .nav li a:hover:not(.active)
      {
        background-color:  rgba(105, 129, 249,0.3);
        border-radius: 7px;
      }
      .nav li a.active
      {
        background-color: red;
        border-radius: 7px;
      }
      .rigged
      {
        color:white;
        font-size:80px;
        font-family: 'PT Sans', sans-serif;
        padding-left: 20px;
        display: block;
      }
      body
      {
        padding-bottom: 20px;
      }
      .formcontainer
      {
        background-color:rgba( 189, 189, 189 ,1) ;
        width:40%;
        height:350px;
        border-radius: 14px;
      }
      .centerize
      {
        font-size: 40px;
        padding-top: 20px;
      }
      input
      {
        width: 50%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        opacity: 0.85;
        display: inline-block;
        font-size: 17px;
        text-decoration: none;
      }
      input[type=submit]
      {
        background-color: #000000;
        color: white;
        cursor: pointer;
      }
      input[type=submit]:hover
      {
        background-color: white;
        color:black;
      }
    </style>
    <style>
      @media screen and (max-width:1200px)
      {
        label
        {
          font-size: 32px;
        }
        input
        {
          font-size: 15px;
        }
      }
      @media screen and (max-width:900px)
      {
        label
        {
          font-size: 20px;
        }
        input
        {
          font-size: 10px;
        }
        .formcontainer
        {
          height:300px;
        }
      }
    </style>
    <title>Login</title>
  </head>
  <body style="">
    <div class='navcontainer' id='demo'>
      <div class='rigged'>
        GetRigged.com
      </div>
      <div class='nav' id='myTopnav'>
        <ul class="nav" type=none style='display:inline;'>
          <li><a  href="home.php">Home</a></li>
          <li><a href="technews.php">Technews</a></li>
          <li><a href="prebuilds.php">Prebuilds</a></li>
          <li><a href="categories.php">Categories</a></li>
          <li><a href="validate.php">Build Your Rig</a></li>
          <li><a class="active" href='form.php'>Login</a></li>
          <li><a href="javascript:void(0);" onclick="myFunction()" class="icon">
            <i class="fa fa-bars"></i></a></li>
        </ul>
      </div>
    </div>
    <center><div class='formcontainer'>
      <div id='error' style="font-size:25px;display: none;border: 6px solid grey;width:70%;margin-top: 30px;border-radius: 8px;height: 20%;">Login Failed. <br>Check for credentials</div>
      <form  method="POST" onsubmit="return dologin()" accept-charset=utf-8>
        <div class='centerize'>
          <label>Username:</label>
          <input type='text' name='uid' id='userid' style='' required></input>
          <br>
          <br>
          <label>Password: </label>
          <input type='text' name='pass' id='passw' required></input>
          <br>
          <a href='signup.php' style='font-size: 20px;color: green;'>Not a member?Sign up</a>
          <br>
          <input type="submit" value="Login">
        </div></form></center>
        <footer>
          <div class="footer">
            <ul type=none style='padding-left:50px; border-right: 4px solid red'>
            	<li class='ele'><a href="">About Us</a></li>
            	<li class='ele'><a href="">Terms and condition</a></li>
            	<li class='ele'><a href="">Support US</a></li>
            </ul>
            <ul type=none style='padding-left:50px; border-right: 4px solid red'>
            	<li class='ele'><a href="feedback.php">Feedback</a></li>
            	<li class='ele'><a href="request form.php">Spare parts form</a></li>
            </ul>
            <ul type=none>
            	<li class='ele'><img src='../images/fb.png' style='zoom:200%;'></li>
            	<li class='ele'><img src='../images/insta.jpg' style='width:32px;height:32px;'></li>
            </ul>
          </div>
        </footer>
        <script>
        function dologin()
        {
         var email=$("#userid").val();
         var pass=$("#passw").val();
            $.ajax
            ({
            type:"POST",
            dataType: "text",
            url:"loginscript.php",
            data:{uid:email,pass:pass},
            cache:false,
            success:function(data) {
            if(data=="ok")
            {
              window.location.href="build.php";
            }
            else
            {
              window.location.href="form.php";
            }
            }
            });
            return false;
        }
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "nav") {
        x.className += " cssonsive";
        } else {
        x.className = "nav";
        }
    }
    </script>
  </body>
</html>
