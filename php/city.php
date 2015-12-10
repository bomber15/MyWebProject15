<?php
   mysql_connect('localhost', 'root', ''); //Connect to database by root and no pw
   
   mysql_select_db('c9'); //Selects the database in phpmyadmin
   
   $sql = "SELECT * FROM stadium"; //selects all from stadium db
   
   $records = mysql_query($sql);
   
   ?>
<html>
   <head>
      <title></title>
   </head>
   <body>
      <table width ="600px" border="1" cellpadding="1" cellspacing="1">
         <tr>
            <th>City</th>
            <th>Seats</th>
         </tr>
         <?php
            while ($stadium = mysql_fetch_assoc($records)) { //w3schools, youtube
                
                echo "<tr>";
                
                echo "<td>" . $stadium['City'] . "</td>";
                /* All the html code sets up a table for the contents of the db */
                echo "<td>" . $stadium['Seats'] . "</td>";
                
                echo "</tr>";
            }
            ?>
      </table>
   </body>
</html>