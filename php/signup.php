<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
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
        height:600px;
        border-radius: 14px;
      }
      .centerize
      {
        font-size: 30px;
        padding-top: 20px;
      }
      input
      {
        width: 50%;
        padding: 12px;
        border: none;
        border-radius: 4px;
        opacity: 0.85;
        display: inline-block;
        font-size: 15px;
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
    <meta charset="utf-8">
    <title>Signup</title>
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
          <li><a href="prebuilds.php">Prebuilds</a></li>
          <li><a href="categories.php">Categories</a></li>
          <li><a href="validate.php">Build Your Rig</a></li>
          <li><a class="active" href='form.html'>Login/Signup</a></li>
        </ul>
      </div>
    </div>
    <center><div class='formcontainer'>
      <form action="signupscript.php" method="POST">
        <div class='centerize'>
          <label>Firstname:</label>
          <input type='text' name='fname' required></input>
          <br>
          <br>
          <label>Lastname: </label>
          <input type='text' name='lname' required></input>
          <br>
          <br>
          <label style="margin-right: 55px;">Email:</label>
          <input type='text' name='eid' required></input>
          <br>
          <br>
          <label>Password: </label>
          <input type='Password' name='psw' required></input>
          <br>
          <br>
          <label>Username: </label>
          <input type='text' name='user' required></input>
          <br>
          <br>
          <label>Birthdate(YYYY-MM-DD): </label>
          <input type='text' name='bday' required></input>
          <br>
          <br>
          <input type="submit" value="Create A/C">
        </div></center>
  </body>
</html>
