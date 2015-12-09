<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title></title>
      <link rel="stylesheet" href="css/forms.css" type="text/css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <style>
         .error {color: #FF0000;}
      </style>
      <?php
         $conn = mysql_connect('localhost', 'root', '');
         $db   = mysql_select_db('c9');
         
         $username = mysql_real_escape_string( $_POST["username"] );
         $password = mysql_real_escape_string( md5($_POST["password"]) );
         
         $sql = "INSERT INTO users VALUES('$username', '$password')" ;
         
         
         
         /*
         * PHP SimpleXML
         * Loading a XML from a file, adding new elements and editing elements
         */
         //get name from form
         
         $name = $_POST["name"]; //this get the name that the user enters from the index.php page
         $favteam = $_POST["favteam"];
         $winner = $_POST["winner"];
         $email = $_POST["email"];
         
         
         if (file_exists('/home/ubuntu/workspace/xml/form.xml')) { //Checks if form.xml exists
         //loads the xml and returns a simplexml object
         $xml = simplexml_load_file('/home/ubuntu/workspace/xml/form.xml'); //If exists simpleXML load
         
         //transforming the object in xml format
         $xmlFormat = $xml->asXML();//sets it to XML format
         
         //adding new child to the xml
         $newChild = $xml->addChild('person'); 
         $newChild->addChild('name', $name);
         $newChild->addChild('favteam', $favteam);
         $newChild->addChild('winner', $winner);
         $newChild->addChild('email', $email);
         
         } else {
         exit('Unable to open form.xml.');
         }
         
         if(mysql_query($sql) ) {
           echo "Inserted Successfully";
         }
         else {
           echo "Insertion Failed";
         }
         
         $usernameErr = $passwordErr = "";
         $username = $password = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if (empty($_POST["username"])) {
         $usernameErr = "Required";
         }
         
         if (empty($_POST["password"])) {
         $passwordErr = "Required";
         
         }
         }
         file_put_contents('/home/ubuntu/workspace/xml/form.xml', $xml->asXML()); //Saves the details
         
         $name = $_POST["name"];
         $winner = $_POST["winner"];
         
           writeRSS();
           function writeRSS(){
            if (file_exists('/home/ubuntu/workspace/rss.xml')) {
                
          $name = $_POST["name"];
          $winner = $_POST["winner"];
          
          $description = $name.",".$winner;    
                
                
            //loads the xml and returns a simplexml object
            $rssxml = simplexml_load_file('/home/ubuntu/workspace/rss.xml');
            $newChild = $rssxml->channel->addChild('item');
            $newChild->addChild('title', 'Welcome to our website');
            $newChild->addChild('link', '/home/ubuntu/workspace/rss.xml');
            $newChild->addChild('description', $description);
            file_put_contents('/home/ubuntu/workspace/rss.xml', $rssxml->asXML());
         }
         }
         ?>
      ?>
   </head>
   <body>
      <div id="wrapper">
         <form id="reg" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <fieldset>
               <legend>Register Form</legend>
               <div>
                  <input type="text" name="username" placeholder=
                     "Enter Username" /><span class="error">* <?php echo $usernameErr;?></span>
               </div>
               <div>
                  <input type="text" name="password" placeholder=
                     "Enter Password"/><span class="error">* <?php echo $passwordErr;?></span>
               </div>
               <input type="submit" name="enter" value="Sign-Up" />
            </fieldset>
         </form>
      </div>
   </body>
</html>