<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arvo">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="parallax.css">
  <link href="footer_css.css" type="text/css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <title>Home</title>
  <style>
      .parentDisable
      {
        position: absolute;
        top: 0;
        background-color: white;
        opacity: 0.15;
        left: 0;
        z-index: 8;
        height: 100%;
        width: 100%;
      }
      .fall
      {
        animation-name: example;
        position: absolute;
        top:0px;
        left:0px;
        animation-duration: 2s;
        position: relative;
        z-index: 999;
      }
      @keyframes example
      {
        from {top:-1000px;}
        to {top: 0px;}
      }
      .popupform
      {
        display: block;
        margin-left: auto;
        margin-right: auto;
        background-color: #fff;
        width:20%;
        padding-bottom: 20px;
        top:00px;
        border-radius: 15px;
        transition: 4s;
      }
      .popupform form input[type='text']
      {
        margin-bottom: 15px;
        font-size: 15px;
        width: 80%;
        height: 20px;
        background-color: rgba(125,125,125,0.4);
        padding:10px;
        border-radius: 4px;
        border: none;
      }
      .popupform form input[type='submit']
      {
        background-color: black;
        color: white;
        border: none;
        padding: 6px;
        margin-bottom: 5px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 18px;
        width: 90%;
        background-color: #ab0000;
      }
      #closeme
      {
        background-color: black;
        color: white;
        padding: 6px;
        border: none;
        cursor: pointer;
        margin-bottom: 15px;
        border-radius: 6px;
        font-size: 18px;
        background-color: #ab0000;
        width: 90%;
      }
      p
      {
        font-family: 'Montserrat', sans-serif;
        font-size:22px;padding:15px;
      }
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
              padding-top:5px;
            }
            ul.nav
            {
              list-style-type: none;
              overflow: hidden;
              float:right;
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
              font-size: 30px;
              padding-top: 20px;
            }
  </style>
</head>
<body >
  <div class='navcontainer'>
    <div class='rigged'>
      GetRigged.com
    </div>
    <div class='nav'>
      <ul class='nav' type=none style='display:inline;'>
        <li><a  href="home.html" class="active">Home</a></li>
        <li><a href="technews.html" >Technews</a></li>
        <li><a href="prebuilds.html">Prebuilds</a></li>
        <li><a href="categories.html">Categories</a></li>
        <li><a href="build.html">Build Your Rig</a></li>
        <li><a href='form.html'>Login/Signup</a></li>
      </ul>
    </div>
  </div>
  <div id='disable' class="parentDisable"  onload='openForm()'></div>
  <div class='fall'>
    <div class='popupform' id='myForm'>
      <p>Before we start lets get you logged in</p>
      <form action="loginscript.php" method="POST">
        <center>
        <input type='text' id='user' name='uid' placeholder="Username"><br>
        <input type='text' id='psw' name='pass' placeholder="Password"><br>
        <input type="submit" value='Login'>
        <input type="button" id='closeme' value='Nope, Thank you' onclick="closeForm()"><br>
        <a href="signup.html" style="color:black;text-decoration:none;">I am not a member</a>
        </center>
      </form>
    </div>
  </div>
  <section>
    <br>
    <div class='container'>
      <div id='parallax1'><p class='cen'>Best Bitcoin mining rigs</p></div>
    </div>
    <div class='container'>
      <div id='parallax2'><p class='cen'>G.Skill Trident Z RGB</p></div>
    </div>
    <div class='container'>
      <div id='parallax3'><p class='cen'>Corsair launches new Hydro Series, H100i v2</p></div>
    </div>
  </section>
  <footer>
    <div class="footer">
      <ul type=none style='margin-bottom: 0px;padding-left:50px;'>
        <li class='ele'><a href="">About Us</a></li>
        <li class='ele'><a href="">Terms and condition</a></li>
        <li class='ele'><a href="">Support US</a></li>
      </ul>
      <ul type=none>
        <li class='ele'><a href="feedback.html">Feedback</a></li>
        <li class='ele'><a href="request form.html">Spare parts form</a></li>
      </ul>
      <ul type=none>
        <li class='ele'><img src='fb.png' style='zoom:200%;'></li>
        <li class='ele'><img src='insta.jpg' style='width:32px;height:32px;'></li>
      </ul>
      <div class="vl"></div>
      <div class="vl2"></div>
    </div>
  </footer>
</body>
</html>

  <footer>
    <div class="footer">
      <ul type=none style='padding-left:50px;'>
      	<li class='ele'><a href="">About Us</a></li>
      	<li class='ele'><a href="">Terms and condition</a></li>
      	<li class='ele'><a href="">Support US</a></li>
      </ul>
      <ul type=none>
      	<li class='ele'><a href="feedback.html">Feedback</a></li>
      	<li class='ele'><a href="request form.html">Spare parts form</a></li>
      </ul>
      <ul type=none>
      	<li class='ele'><img src='fb.png' style='zoom:200%;'></li>
      	<li class='ele'><img style="width:32px;height:32px;" src='insta.jpg' style='zoom:200%;'></li>
      </ul>
      <div class="vl"></div>
      <div class="vl2"></div>
    </div>
  </footer>
  <script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
        document.getElementById("disable").style.display = "block";
    }
    function closeForm() {
        document.getElementById("myForm").style.display = "none";
        document.getElementById("disable").style.display = "none";

    }
  </script>
</body>
</html>
