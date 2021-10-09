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
<div class='genericdiv'>
  <div>
    <img src='images/google_logo.jpg' class='floatimg' style="width:500px;height:250px;"></img>
  </div>
    <div style='padding-left:600px;'>
    <h1>Google says it has a secret China search project, but reveals no details</h1>
    <p>Without giving out much details about Google's reported plan to launch a censored version
       of its search engine in China, a top company executive told lawmakers in the US that the company would follow its
       privacy and security controls in case it pursues any interest in China.Appearing before members of the US Congress at a Senate Commerce Committee hearing on Wednesday, Google's Chief Privacy Officer, Keith Enright, went so far as to
       confirm that the China search project does exist, The Wired reported. </p>
  </div>
</div>
<div class='genericdiv'>
  <div>
    <img src='images/aws.jpeg' class='floatimg' style="width:500px;height:250px;"></img>
  </div>
  <div style='padding-left:600px;'>
    <h1>Google, IBM and others come together to take on Amazon's cloud business</h1>
    <p>A group of cloud computing companies is taking aim at Amazon.com's dominant Amazon Web Services by offering free or deeply discounted rates on moving data between their cloud services.
The Bandwidth Alliance, as the group calls itself, launched on Wednesday and includes large cloud computing firms such as Alphabet Inc's Google Cloud,
Microsoft Corp's Azure and International Business Machines' IBM Cloud, as well independent firms such as Digital Ocean, Backblaze and Packet.
 </p>
  </div>
</div>
<div class='genericdiv'>
  <div>
    <img src='images/office.jpg' class='floatimg' style="width:500px;height:250px;"></img>
  </div>
  <div style='padding-left:600px;'>
    <h1>LinkedIn wants to help recruiters understand job market better with new tool</h1>
    <p>Mumbai: To help recruiters tap into a talented workforce, professional social network site LinkedIn on Wednesday launched its first self-service analytics product called "Talent Insights".

With this tool, firms can now take the guesswork out of their hiring strategies and equip themselves with market and geo-agnostic intelligence to understand their workforce better.

"Building on the era of talent intelligence, 'Talent Insights' helps in making strategic talent decisions with an insight into the movement and development of talent.  </p>
  </div>
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
