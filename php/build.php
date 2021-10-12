<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="../css/footer_css.css" type="text/css" rel="stylesheet">
    <link href="../css/navfootmedia.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
      p
      {
        font-size:50px;color:white;text-align:left;margin-left:5%;font-family: 'Raleway', sans-serif;
      }
      .navcontainer
      {
        display: grid;
        grid-template-columns: 35% 65%;
        grid-auto-rows: 80px;
        width:100%;
        height:100px;
      }
      tr
      {
          font-family: 'Raleway', sans-serif;
          text-align: left;
          font-size: 28px;
          border: 10px solid white;
      }
      body {background-color: #000000;
      background-image: url('../images/pro.jpg');
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      height:1100px;
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
      .formcontainer
      {
        background-color:rgba( 189, 189, 189 ,1) ;
        width:40%;
        height:310px;
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
        padding: 14px;
        border: none;
        border-radius: 4px;
        opacity: 0.85;
        display: inline-block;
        font-size: 17px;
        line-height: 20px;
        text-decoration: none; /* remove underline from anchors */
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
      #disp
      {
        width: 100%;
        height: 50%;
      }
      table
      {
        width: 100%;
      }
      th, td
      {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid white;
      }
      tr:hover {background-color:#f5f5f5;color:black;}
    </style>

    <title>Prebuilds</title>
  </head>
  <body>
    <div class='navcontainer'>
      <div class='rigged'>
        GetRigged.com
      </div>
      <div class='nav'>
        <ul class="nav" type=none style='display:inline;'>
          <li><a  href="home.php">Home</a></li>
          <li><a href="technews.php">Technews</a></li>
          <li><a href="prebuilds.php" class="active">Prebuilds</a></li>
          <li><a href="categories.php">Categories</a></li>
          <li><a href="validate.php">Build Your Rig</a></li>
          <li>
          <?php
          session_start();
          if(isset($_SESSION['uid']))
          {
            echo'<a href="logout.php" style="text-decoration:none">Logout</a>';
          }
          else
          {
            echo'<a href="form.php" style="text-decoration:none">Login</a>';
          }
          ?>
          </li>
        </ul>
      </div>
    </div>
    <p style="font-size: 35px;">Select a Processor</p>
    <div id='disp'></div>
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
    <script type="text/javascript">
      var cont=document.getElementById('disp')
        function callme(){
          var ourrequest = new XMLHttpRequest();
          ourrequest.open("GET", "../cmptble.json");
          ourrequest.onload = function(){
              var ourdata= JSON.parse(ourrequest.cssonseText);
              var output = '';
              for(var i=0;i<ourdata.length;i++)
              {
                output += '<center><table style="width:85%;color:white;"><tr><td><a style="all:unset;" href="ram_final.php?Var1='+ourdata[i].Processor+'&Var2=Hey">'+ ourdata[i].Processor +'</a></td></tr>';
              }
              output+='</table></center>';
              cont.insertAdjacentHTML('beforeend',output);
            }
            ourrequest.send();
          }
          callme();
  </script>

</body>
</html>
