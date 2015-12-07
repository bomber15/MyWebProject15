<?php
      include_once('/home/ubuntu/workspace/php/db.php');
 
	  $username = mysql_real_escape_string( $_POST["username"] );
	  $password = mysql_real_escape_string( md5($_POST["password"]) );
	  
	
	  $sql = "INSERT INTO users VALUES('$username', '$password')" ;
	  
   	  if( empty($username) || empty($password) ){
	  echo "Username and Password Required";
	  exit();
   	  }

	  if( mysql_query($sql) ){
	   echo "Inserted Successfully";
	  }
	  else{
	   echo "Insertion Failed";
	  }
?>