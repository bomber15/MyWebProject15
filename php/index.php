<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title></title>
      <link rel="stylesheet" href="css/forms.css" type="text/css" />
      
      <?php
         $nameErr = $winnerErr = $emailErr = ""; //w3schools, youtube
         $name = $winner = $email = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if (empty($_POST["name"])) {
         $nameErr = "Required";
         }
         
         if (empty($_POST["winner"])) {
         $winnerErr = "Required";
         
         }
         
          if (empty($_POST["email"])) {
         $emailErr = "Required";
         
         }
         }
      ?>
   </head>
   <body>
      <div id="wrapper"> 
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <fieldset>
               <legend>Form</legend>
               <div>
                  <input type="text" name="name" placeholder=  
                     "Enter Your Name"/> <span class="error">* <?php echo $nameErr;?></span> 
               </div>
               <div>
                  <input type="text" name="favteam" placeholder=
                     "What is your Favourate Team" />
               </div>
               <div>
                  <input type="text" name="winner" placeholder=
                     " Pick one team that will be in the final" /> <span class="error">* <?php echo $winnernameErr;?></span>
               </div>
               <div>
                  <input type="text" name="email" placeholder=
                     "Enter your Email"/><span class="error">* <?php echo $emailErr;?></span>
               </div>
               <input type="submit" name="submit" value="Send" />
            </fieldset>
         </form>
      </div>
   </body>
</html>