<?php
$con=@mysql_connect('127.0.0.1','root','');

if(!$con)
{
 die("No such user:". mysql_error());
}
mysql_select_db('Puzzle', $con);
$sql="SELECT * FROM BookNow";
$result = mysql_query($sql);
echo '<center><h1>Details of the visitors</h1></center>'
?>
<table border="2" style= "margin: 0 auto;" >
      <thead>
        <tr>
          <th>Name</th>
          <th>package</th>
          <th>Date</th>
          <th>Number</th>
          <th>Contact</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo "<tr>";
            echo "<td>".$row["Name"]. "</td>";
            echo "<td>".$row["Package"]. "</td>";
            echo "<td>".$row["DayOfVisiting"]. "</td>";
            echo "<td>".$row["CountOfPeople"]. "</td>";
            echo "<td>".$row["ContactNo"]. "</td>";
            echo "<td>".$row["Price"]. "</td>";
            echo "</tr>";

          }
        ?>
      </tbody>
    </table>
     <?php mysql_close($con); ?>
    </body>
    </html>
