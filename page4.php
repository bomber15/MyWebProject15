<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="ltr" lang="en">
   <head>
      <title>PAGE4.html</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="description" content=""/>
      <meta name="author" content=""/>
      <script type="text/javascript" src="script_src.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script type='text/javascript' src='js/script_src.js'></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/project.css" type="text/css" />
      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <!-- Custom CSS -->
      <link href="css/business-casual.css" rel="stylesheet"/>
      <!-- Fonts -->
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css"/>
      <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css"/>
      <style type="text/css">
         .wrap {
         float: left;
         }
      </style>
   </head>
   <body>
      <div id="container">
         <div id="container1">
            <div  id="content">
               <br />
               <h1>
                  <img src="img/euros.png" alt="logo" width="40%" height="100px"  /><img src="img/euros1.jpg" alt="euros" width="60%" align="right" height="100px" />
               </h1>
               <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
                  <div class="container-fluid">
                     <!-- Brand and toggle get grouped for better mobile display -->
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand page-scroll" href="#page-top">Welcome</a>
                     </div>
                     <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                           <li>
                              <a class="page-scroll" href="index.html">Home Page</a>
                           </li>
                           <li>
                              <a class="page-scroll" href="page2.html">Tables Page</a>
                           </li>
                           <li>
                              <a class="page-scroll" href="page3.php">Information Page</a>
                           </li>
                           <li>
                              <a class="page-scroll" href="page4.php">Register Page</a>
                           </li>
                        </ul>
                     </div>
                     <!-- /.navbar-collapse -->
                  </div>
                  <!-- /.container-fluid -->
               </nav>
               <br />
               <div id="heading">
                  Welcome to the Registration Page.
               </div>
               <br />
               <div class="row">
                  <div class="box">
                     <div class="col-lg-12">
                        <hr>
                        <h3 align="center">To be in with a chance to win tickets to the final.</br></br>
                           Can You predict the eventual winner of Euro 2016?
                        </h3>
                        <?php include('/home/ubuntu/workspace/php/index.php');?> 
                        <br />
                        <div>             
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="box">
                        <div class="col-lg-12">
                           <hr>
                           <h2 class="intro-text text-center">
                              <center>If you would like to sign up for our page to recieve the latest updates </center>
                           </h2>
                           <hr>
                           <p>Register For our website and get closer to the action, you can post on the forum and give us feedback.</p>
                           <?php include('/home/ubuntu/workspace/php/indexReg.php');?>
                        </div>
                     </div>
                  </div>
                  <br />
                  <br />
                  <div>
                  </div>
                  <br />
               </div>
            </div>
            <footer>
               <div align="right">
                  <div>
                     <a href=
                        https://www.facebook.com/uefaeuro/><img src="img/facebook.jpg"
                        alt="facebook logo" width="40" height="40" /></a>
                     <a href="https://twitter.com/UEFAEURO?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                     <img src="img/twitter.png" alt="twitter logo" width="40"
                        height="40" /></a>
                     </p>
                  </div>
               </div>
            </footer>
            <!-- jQuery -->
            <script src="js/jquery.js"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>
            <!-- Script to Activate the Carousel -->
            <script>
               $('.carousel').carousel({
                   interval: 5000 //changes the speed
               });
            </script>
         </div>
      </div>
      </div>
   </body>
</html>