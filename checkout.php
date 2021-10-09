<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table>
 <tr>
  <th>Product</th> 
  <th>Quantity</th>
 </tr>
 <?php
 session_start();
$conn = mysqli_connect("localhost", "root", "", "carts");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  console.log($_SESSION['uid']);
  $sql = "
    SELECT DISTINCT(products) as title, count(products) AS count 
    FROM $_SESSION['uid']
    GROUP BY products
    HAVING count > 0";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["title"]. "</td><td>" . $row["count"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>