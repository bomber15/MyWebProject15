<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title></title>
      <link rel="stylesheet" href="css/forms.css" type="text/css" />
   </head>
   <body>
      <div id="wrapper"> 
         <form action="storeXML.php" method="post">
            <fieldset>
               <legend>Form</legend>
               <div>
                  <input type="text" id="name" placeholder=  
                     "Enter Your Name"  required/> 
               </div>
               <div>
                  <input type="text" id="favteam" placeholder=
                     "What is your Favourate Team" />
               </div>
               <div>
                  <input type="text" id="winner" placeholder=
                     " Pick one team that will be in the final"  required />
               </div>
               <div>
                  <input type="text" id="email" placeholder=
                     "Enter your Email"  required />
               </div>
               <input type="submit" id="submit" value="Send" />
            </fieldset>
         </form>
      </div>
   </body>
</html>