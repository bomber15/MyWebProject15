<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title></title>
      <link rel="stylesheet" href="css/forms.css" type="text/css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <?php
         $conn = mysql_connect('localhost', 'root', '');  // Thsi is used to connected the my database with empty password
         $db   = mysql_select_db('c9'); // Selects the database c9 in phpMyAdmin
         
         $username = mysql_real_escape_string( $_POST["username"] ); // Add user input into $username
         $password = mysql_real_escape_string( md5($_POST["password"]) ); // Add user input into $password
         
         $sql = "INSERT INTO users VALUES('$username', '$password')" ; //Inserts the $username and $password into the database
         
         if( empty($username) || empty($password) ) {  // Output if empty
           echo  "Username and Password Required";
         }
         
         else if(mysql_query($sql) ) { //Outputs if successful
           echo "Inserted Successfully";
         }
         else if (!mysql_query($sql) ) { //Outputs if failed
           echo "Insertion Failed";
?>
      <script type="text/javascript"> 
         var tmp_name, tmp_pw;
            function myFunction() {
            	tmp_name = document.getElementById("username").value;
            	tmp_pw = document.getElementById("passwordd").value;
            	
            		
            	if(tmp_name.length < 1) {
            		alert("Please enter your First name!");
            	}
            	
            	else {
                    alert("Username Success");
             }
            	
            if(tmp_pw.length < 5) {
            		alert("Please enter a password. 5 chars min!");
            	}
            	
            	else {
                    alert("Password Success");
                }
            }
      </script>
   </head>
   <body>
      <div id="wrapper"> <!-- This is linkes to the css to give the form design -->
         <form id="reg" name="myform" action="page4.php" method="post">
            <fieldset>
               <p>Sign-Up Form</p>
               <div>
                  <input type="text"="username" placeholder=
                     "Enter Username" required/>
               </div>
               <div>
                  <input type="text"sword" placeholder=
                     "Enter Password" required/>
               </div>
               <input type="button" name="submit" value="Sign-Up" onclick="myFunction()" />
            </fieldset>
         </form>
      </div>
   </body>
</html>