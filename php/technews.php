<!doctype html>
<html>
<head>
    <title>Technews</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="slides.css" type="text/css" rel="stylesheet">
    <link href="footer_css.css" type="text/css" rel="stylesheet">
    <style>
      .navcontainer
      {
        display: grid;
        grid-template-columns: 35% 65%;
        grid-auto-rows: 80px;
        width:100%;
        height:150px;
      }
      body {background-color: #000000;}
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
        padding-left: 50px;
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
    </style>
</head>
<body>
  <header>
<div class='navcontainer'>
  <div class='rigged'>
    GetRigged.com
  </div>
  <div class='nav'>
    <ul class="nav" type=none style='display:inline;'>
      <li><a  href="home.php">Home</a></li>
      <li><a href="technews.php" class="active">Technews</a></li>
      <li><a href="prebuilds.php">Prebuilds</a></li>
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
          ?></li>
    </ul>
  </div>
</div>
</header>
<div>
  <div class="slideshow-container">
  <div class="mySlides fade">
    <img src="images/vision.jpg" style="width:100%" class="fit">
    <div class="text">C</div>
  </div>
  <div class="mySlides fade">
    <img src="game.jpg" style="width:100%" class="fit">
    <div class="text">C</div>
  </div>
  <div class="mySlides fade">
    <img src="gaming.jpeg" style="width:100%" class="fit">
    <div class="text">C</div>
  </div>
  </div>
  <br>
  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
</div>
<div style="padding:30px;color: #ffffff;">
<table border="0" cellpadding="0" cellspacing="0" style="width: 100%" width="100%">
  <tr>
    <td bgcolor="#FFFFFF" style="background-color: #000000;">
      <table border="0" cellpadding="0" cellspacing="0" style="width: 100% !important" width="100%">
        <tr>
          <td class="cell" style="width: 33%; vertical-align: top" width="33%" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100% !important" width="100%">
              <tr>
                <td style="padding: 10px"><div class="header-s" style="font-family: Tahoma, Geneva, sans-serif; font-size: 20px; font-weight: bold; font-style: normal; text-align: left">Google says it has a secret China search project, but reveals no details</div></td>
              </tr>
              <tr>
                <td style="padding: 10px"><div><img alt="Seattle, WA" src="images/google_logo.jpg" style="display: block; height: auto; width: 100%" width="196" /></div></td>
              </tr>
              <tr>
                <td style="padding: 10px"><div style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; font-style: normal; font-weight: normal; text-align: center">
                Without giving out much details about Google's reported plan to launch a censored version of its search engine in China, a top company executive told lawmakers in the US that the company would follow its privacy and security controls in case it pursues any interest in China.Appearing before members of the US Congress at a Senate Commerce Committee hearing on Wednesday, Google's Chief Privacy Officer, Keith Enright, went so far as to confirm that the China search project does exist, The Wired reported.</div></td>
              </tr>
              <tr>
                <td style="padding: 10px">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="text-align: center; margin-left: auto; margin-right: auto">
                    <tr>
                      <td align="center" bgcolor="#2181A5" style="background-color: #2181A5; padding: 10px; border-radius: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px"><a href="#" style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: #FFFFFF; font-style: normal; font-weight: bold; text-align: center; text-decoration: none"><span style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: #FFFFFF; font-style: normal; font-weight: bold; text-align: center; text-decoration: none">Read more</span></a></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
          <td class="cell" style="width: 33%; vertical-align: top" width="33%" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100% !important" width="100%">
              <tr>
                <td style="padding: 10px"><div class="header-s" style="font-family: Tahoma, Geneva, sans-serif; font-size: 20px; font-weight: bold; font-style: normal; text-align: left">Google, IBM and others come together to take on Amazon's cloud business
</div></td>
              </tr>
              <tr>
                <td style="padding: 10px"><div><img alt="Vancouver, BC" src="images/aws.jpeg" style="display: block; height: auto; width: 100%" width="196" /></div></td>
              </tr>
              <tr>
                <td style="padding: 10px"><div style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; font-style: normal; font-weight: normal; text-align: center">
                A group of cloud computing companies is taking aim at Amazon.com's dominant Amazon Web Services by offering free or deeply discounted rates on moving data between their cloud services. The Bandwidth Alliance, as the group calls itself, launched on Wednesday and includes large cloud computing firms such as Alphabet Inc's Google Cloud, Microsoft Corp's Azure and International Business Machines' IBM Cloud, as well independent firms such as Digital Ocean, Backblaze and Packet.
              </div></td>
              </tr>
              <tr>
                <td style="padding: 10px">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="text-align: center; margin-left: auto; margin-right: auto">
                    <tr>
                      <td align="center" bgcolor="#2181A5" style="background-color: #2181A5; padding: 10px; border-radius: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px"><a href="#" style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: #FFFFFF; font-style: normal; font-weight: bold; text-align: center; text-decoration: none"><span style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: #FFFFFF; font-style: normal; font-weight: bold; text-align: center; text-decoration: none">Read more</span></a></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
          <td class="cell" style="width: 33%; vertical-align: top" width="33%" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100% !important" width="100%">
              <tr>
                <td style="padding: 10px"><div class="header-s" style="font-family: Tahoma, Geneva, sans-serif; font-size: 20px; font-weight: bold; font-style: normal; text-align: left">LinkedIn wants to help recruiters understand job market better with new tool
</div></td>
              </tr>
              <tr>
                <td style="padding: 10px"><div><img alt="San Francisco, CA" src="images/office.jpg" style="display: block; height: auto; width: 100%" width="196" /></div></td>
              </tr>
              <tr>
                <td style="padding: 10px"><div style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; font-style: normal; font-weight: normal; text-align: center">
                Mumbai: To help recruiters tap into a talented workforce, professional social network site LinkedIn on Wednesday launched its first self-service analytics product called "Talent Insights". With this tool, firms can now take the guesswork out of their hiring strategies and equip themselves with market and geo-agnostic intelligence to understand their workforce better. "Building on the era of talent intelligence, 'Talent Insights' helps in making strategic talent decisions with an insight into the movement and development of talent.
              </div></td>
              </tr>
              <tr>
                <td style="padding: 10px">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="text-align: center; margin-left: auto; margin-right: auto">
                    <tr>
                      <td align="center" bgcolor="#2181A5" style="background-color: #2181A5; padding: 10px; border-radius: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px"><a href="#" style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: #FFFFFF; font-style: normal; font-weight: bold; text-align: center; text-decoration: none"><span style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: #FFFFFF; font-style: normal; font-weight: bold; text-align: center; text-decoration: none">Read more</span></a></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</div>
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
    	<li class='ele'><img src='fb.png' style='zoom:200%;'></li>
    	<li class='ele'><img src='insta.jpg' style='width:32px;height:32px;'></li>
    </ul>
  </div>
</footer>
<script>
 var slideIndex = 0;
 showSlides();

 function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>