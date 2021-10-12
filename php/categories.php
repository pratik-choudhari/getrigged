<?php
  session_start();?>
<!DOCTYPE php>
<php>
<head>
  <title>Categories</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/navfootmedia.css">
  <link href="../css/footer_css.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arvo">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <style>
   .navcontainer
        {
          display: grid;
          grid-template-columns: 35% 65%;
          grid-auto-rows: 80px;
          width:100%;
          height:100px;
        }
        body {background-color: #000000;}
        div .nav
        {
          display: block;
          margin-top: 5px;
        }
        ul.nav
        {
          list-style-type: none;
          overflow: hidden;
          float:right;
          margin-top: 30px;
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
        .centerize
        {
          font-size: 40px;
          padding-top: 20px;
        }
        .price{
          overflow: hidden;
          vertical-align: middle;
          display: flex;
          flex-direction: row;
          flex-wrap: wrap;
          justify-content: center;
          align-items: center;
          width : calc(100% - 0%);
          background: #000;
          margin: 20px auto;
        }
        .price .price_box{
          display:inline-block;
          min-width : calc(350px - 30px);
          min-height: calc(400px - 30px);
          float:left;
          overflow: hidden;
          vertical-align:center ;
          margin: 10px ;
        }
        .price  a:visited {
          display: block;
          font-family: josefin sans,sans-serif;
          color: #fff;
          font-size: 24px;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .price .price_box a:link {
          color: white;

        }

        .price .price_box .active {
          color: white;
        }
  </style>
</head>
<body bgcolor=black >
  <div class='navcontainer'>
    <div class='rigged'>
      GetRigged.com
    </div>
    <div class='nav' id='myTopnav'>
      <ul class='nav' type=none style='display:inline;'>
        <li><a  href="home.php" >Home</a></li>
        <li><a href="technews.php" >Technews</a></li>
        <li><a href="prebuilds.php">Prebuilds</a></li>
        <li><a class="active" href="categories.php">Categories</a></li>
        <li><a href="validate.php">Build Your Rig</a></li>
        <li><?php
          if(isset($_SESSION['uid']))
          {
            echo'<a href="logout.php" style="text-decoration:none">Logout</a>';
          }
          else
          {
            echo'<a href="form.php" style="text-decoration:none">Login</a>';
          }
          ?></li>
          <li><a href="javascript:void(0);" onclick="myFunction()" class="icon">
            <i class="fa fa-bars"></i></a></li>
      </ul>
    </div>
  </div>
<div class="price" >
  <a href="https://www.buildpc.in/beginner">
    <div class="price_box" style="background: url(../images/imanbeg.jpg) no-repeat;">
      <h1 align=center style="padding-top: 40%;">&#8377; 30K<br /> Beginner</h1>
    </div>
  </a>
  <a href="https://www.buildpc.in/amateur">
    <div class="price_box" style="background: url(../images/good.jpg) no-repeat;">
      <h1 align=center style="padding-top: 40%;">&#8377;50K <br /> Amateur</h1>
    </div>
  </a>
  <a href="https://www.buildpc.in/pro">
    <div class="price_box" style="background: url(../images/superb.jpg) no-repeat;">
      <h1 align=center style="padding-top: 40%;"> &#8377;70K <br /> Pro</h1>
    </div>
  </a>
  <a href="https://www.buildpc.in/expert">
    <div class="price_box" style="background: url(../images/outstanding.jpg) no-repeat;">
      <h1 align=center style="padding-top: 40%;">&#8377;100K <br /> Expert</h1>
    </div>
  </a>
  <a href="https://www.buildpc.in/mvp">
    <div class="price_box" style="background: url(../images/extreme.jpg) no-repeat;">
      <h1 align=center style="padding-top: 40%;">&#8377;100K+ <br /> MVP</h1>
    </div>
  </a>
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
  function myFunction()
  {
    var x = document.getElementById("myTopnav");
    if (x.className === "nav")
    {
      x.className += " cssonsive";
    }
    else
    {
      x.className = "nav";
    }
  }
</script>
</body>
</php>
