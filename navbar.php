<?php

echo '<ul class="nav" type=none style='display:inline; font-color:white;'>
          <li><a  href="home.html">Home</a></li>
          <li><a href="technews.html">Technews</a></li>
          <li><a href="prebuilds.html">Prebuilds</a></li>
          <li><a href="categories.html">Categories</a></li>
          <li><a href="build.html">Build Your Rig</a></li>
          <li>
          <?php 
          if(isset($_SESSION['status']))
          {
              echo ' <a class="active" href="logout.php" >logout</a>';
          }
          else{
              echo '<a class="active" href="form.html" >logout</a>';}
          ?>
        </ul>';
?>