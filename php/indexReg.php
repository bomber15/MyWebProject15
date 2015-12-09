<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title></title>
      <link rel="stylesheet" href="css/forms.css" type="text/css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <?php
         $conn = mysql_connect('localhost', 'root', '');
         $db   = mysql_select_db('c9');
         
         $username = mysql_real_escape_string( $_POST["username"] );
         $password = mysql_real_escape_string( md5($_POST["password"]) );
         
         $sql = "INSERT INTO users VALUES('$username', '$password')" ;
         
         if( empty($username) || empty($password) ) {
           echo "Username and Password Required";
         }
         
         if(mysql_query($sql) ) {
           echo "Inserted Successfully";
         }
         else {
           echo "Insertion Failed";
         }
         ?>
   </head>
   <body>
      <div id="wrapper">
         <form id="reg" action="page4.php" method="post">
            <fieldset>
               <legend>Register Form</legend>
               <div>
                  <input type="text" name="username" placeholder=
                     "Enter Username" />
               </div>
               <div>
                  <input type="text" name="password" placeholder=
                     "Enter Password"  required />
               </div>
               <input type="submit" name="submit" onclick="validateForm()" value="Sign-Up" />
            </fieldset>
         </form>
      </div>
   </body>
</html>