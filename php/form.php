<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/navfootmedia.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">  
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/footer_css.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
      input[type=text], input[type=password] {
      width: calc(100% - 57px);
      height: 36px;
      margin: 13px 0 0 -5px;
      padding-left: 10px; 
      border-radius: 0 5px 5px 0;
      border: solid 1px #cbc9c9; 
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #fff; 
      }
      form {
      margin: 0 30px;
      }
      h1 {
      padding: 10px 0;
      font-size: 32px;
      font-weight: 300;
      text-align: center;
      }
      input[type=password] {
      margin-bottom: 15px;
      }
       label#icon {
      margin: 0;
      border-radius: 5px 0 0 5px;
      }
      #icon {
      display: inline-block;
      padding: 9.3px 15px;
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #1c87c9;
      color: #fff;
      text-align: center;
      }
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
      max-width: 320px; 
      padding: 20px;
      margin: auto;
      border-radius: 5px; 
      border: solid 1px #ccc;
      box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
      background: #ebebeb; 

      }
      button {
      width: 100%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: #1c87c9; 
      font-size: 18px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #26a9e0;
      }

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
      }
    </style>
    <title>Login</title>
  </head>
  <body>
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
    <center>
      <div id='error' style="font-size:25px;display: none;border: 6px solid grey;width:70%;margin-top: 30px;border-radius: 8px;height: 20%;">Login Failed. <br>Check for credentials</div>
      <form  method="post" onsubmit="return dologin()" accept-charset="utf-8">
        <div class='formcontainer'>

          <label id="icon" for="uid"><i class="fas fa-user"></i></label>
          <input type="text" name="uid" placeholder="Username" required/><br>
          
          <label id="icon" for="pass"><i class="fas fa-unlock-alt"></i></label>
          <input type="password" name="pass" placeholder="Password" required/>

          <a href='signup.php' style='font-size: 12px;color: green;'>Not a member?Sign up</a>
          <br>
          <button type="submit">Login</button>
        </div>
      </form>
    </center>
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
