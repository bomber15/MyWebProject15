<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="ltr" lang="en">
   <head>
      <title>PAGE3.html</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta charset="utf-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="description" content=""/>
      <meta name="author" content=""/>
      <script type="text/javascript" src="js/script_src.js"></script>
      <script type="text/javascript" src="js/my_script.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
      <script>
         function loadDoc() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
              myFunction(xhttp);
            }
          };
          xhttp.open("GET", "xml/youngPlayers.xml", true);  // Locates the youngPlayers.xml
          xhttp.send();
         }
         function myFunction(xml) {
          var i;
          var xmlDoc = xml.responseXML; //get the response data as XML data
          var table="<tr><th>Name</th> <th>Position</th> <th>Team</th><th>Club</th></tr>"; //Sets up a tanle for the list
          var x = xmlDoc.getElementsByTagName("player"); //Gets the Tag Name player and sets it in x
          for (i = 0; i <x.length; i++) { // Loops the length of x pltting name, position etc in the <td>
            table += "<tr><td>" +
            x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +  //Add the table data
            "</td><td>" +
            x[i].getElementsByTagName("position")[0].childNodes[0].nodeValue +
            "</td><td>"+
            x[i].getElementsByTagName("team")[0].childNodes[0].nodeValue +
            "</td><td>" +
            x[i].getElementsByTagName("club")[0].childNodes[0].nodeValue +
            "</td></tr>";
          }
          document.getElementById("playerList").innerHTML = table; // Sets the id playerlist that is called by the <table> in the doc position
         }
           
      </script>
   </head>
   <body>
      <div id="container">
      <div id="container1">
      <div id="content">
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
         <div class="row">
            <div class="box">
               <div class="col-lg-12">
                  <hr>
                  <center>
                     <h2 class="intro-text text-center">About Travel Information AND links</h2>
                  </center>
                  </h2>
                  <hr>
               </div>
               <div class="col-md-6">
                  <img src="img/stade.jpg" width="200" height="200" class="wrap" />
                  <p>  Can’t wait for more Soccer? The 2016 UEFA European Championships are fast approaching! Be there in the flesh 10 June – 
                     10 July as France hosts the 2016 Euro Championships. For the first time the European Championships Final Tournament 
                     will be contested by 24 teams instead of the traditional 16. Escape to the beautiful land of France and experience local 
                     French culture, food, and take in some sights all while enjoying the live action of your favorite team right in front of 
                     your eyes! Great Atlantic Sports is once again here for you and your sense of sport driven adventure. Offering a plethora 
                     of packages to cater to your specific needs, we are sure to provide you with a once in a lifetime experience to the 2016 Euro 
                     Championships. Book now to get the best we have to offer before someone steals your spot to the action.
                  </p>
                  <center>
                     <p><a href=
                        http://www.greatatlanticsports.com/article/uefa-euro-cup-2016-travel-packages><img src="img/plane.jpg"
                        alt="plane logo" width="80" height="80" /></a></p>
                  </center>
               </div>
               <div class="clearfix"></div>
            </div>
            <div class="row">
               <div class="box">
                  <div class="col-lg-12">
                     <hr>
                     <center>
                        <h2 class="intro-text text-center">Young Players To Watch</h2>
                     </center>
                     <hr>
                  </div>
                  <div class="col-md-6">
                     <img src="img/jeff.jpg" width="200" height="200" class="wrap" />
                     <p>In this section we have a list of some of the top young tallents that will grace france in the coming summer. Each player looking to make a big impact and maybe land the move of their dreams to one of the European Giants in club football. The euros is a great stage for up and coming tallent to show what they have against the best players in europe. In the past is has been a great stage for the likes of Cristiano Ronaldo and Wayne Rooney to anounce that they had arrived at the top.</p>
                     <form>
                        <center><button type ="button" onclick="loadDoc()"/>Young Players List</button></center>
                        <br><br>
                        <center>
                           <table id="playerList"></table>
                        </center>
                        <br />
                  </div>
                  </form>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="row">
               <div class="box">
                  <div class="col-lg-12">
                     <hr>
                     <center>
                        <h2 class="intro-text text-center">Cities were games are played</h2>
                     </center>
                     <hr>
                  </div>
                  <div class="col-md-6">
                     <img src="img/marseille.jpg" width="200" height="200"class="wrap" />
                     <p>At this Section we will show you some of the host citys and stadiums. These /citys and venues are steeped in tradition and are as you would expect from the french, oozing with class.</p>
                     <p>The image is if the city of Marseille, this is where ireland will play their first game against Wales on the 5th of June.</p>
                     </br>
                  
                     <?php include( '/home/ubuntu/workspace/php/city.php' );?>
                     <div class="clearfix"></div>
                  </div>
               </div>
               <footer>
                  <div align="right">
                     <div>
                        <a href=
                           https://www.facebook.com/uefaeuro/><img src="img/facebook.jpg"
                           alt="facebook logo" width="40" height="40" /></a>
                        <a href="https://www.facebook.com/LakesideHotelandLeisureCentre">
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
            </div>
         </div>
      </div>
   </body>
</html>