<?php
      session_start();
      $con=mysqli_connect('localhost','root','','carts');
      $result=mysqli_query($con,"select * from ".$_SESSION['uid']);
      echo "<center><table>";
      $count=mysqli_num_rows($result);
      if($count!=0)
      {
        while($data = mysqli_fetch_row($result))
        {   
            echo "<tr>";
            echo "<td align=center>$data[0]</td>";
            echo "</tr>";
        }
        echo "</table></center>";
      }
      else
      {
        echo "<h1 style='font-size: 50px;color: white;padding-bottom: 200px;'>Your cart is empty :( </h1>".$count;
      }
    ?>