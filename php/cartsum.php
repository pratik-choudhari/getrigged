<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="../css/footer_css.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function (e) {
    var  url_string= window.location.href;
    var url = new URL(url_string);
    var c = url.searchParams.get("Var2");
      $.ajax({
          type:"POST",
          url: "cartin.php",
          data: {pro: c},
      });
    });
</script>
    <style>
      table
      {
        width: 70%;
      }
      th, td
      {
        text-align: left;
        border-bottom: 1px solid white;
      }
      tr:hover {background-color:#f5f5f5;color:black;}
      tr
      {
          font-family: 'Raleway', sans-serif;
          text-align: left;
          font-size: 28px;
          border: 10px solid white;
      }
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
        padding: 10px 15px;
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
        height:380px;
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
    <meta charset="utf-8">
    <title>Cart Summary</title>
  </head>
  <body>
    <div class='navcontainer' id='demo'>
      <div class='rigged'>
        GetRigged.com
      </div>
      <div class='nav'>
        <ul class="nav" type=none style='display:inline;'>
          <li><a  href="home.php">Home</a></li>
          <li><a href="technews.php">Technews</a></li>
          <li><a href="prebuilds.php">Prebuilds</a></li>
          <li><a href="categories.php">Categories</a></li>
          <li><a href="validate.php">Build Your Rig</a></li>
          <li>
          <?php
          if(isset($_SESSION['status']))
          {
              echo ' <a class="active" href="logout.php" style="text-decoration:none">logout</a>';
          }
          else{
              echo '<a class="active" href="form.php" >logout</a>';}
          ?>
        </ul>
      </div>
    </div>
    <div style="font-size: 50px;color: white;font-family: 'Raleway', sans-serif;padding-left: 100px;">Cart Summary</div>
    <div id='cart' style="color: white;"></div>
    <script type="text/javascript">
      $(document).ready(function() {
          $.ajax
          ({
          type:'post',
          url:'cartsumscript.php',
          dataType: "php",
          data:{
          },
          success: function(cssonse){
            $("#cart").php(cssonse);
            }
          });
        });
  </script>

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
  </body>
</php>
