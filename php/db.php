<?php

    //Connect to the database
    $host = "127.0.0.1";
    $user = "richardfeeney";                     //Your Cloud 9 username
    $pass = "";                                 
    $db = "c9";                          //Your database name you want to connect to
    $port = 33306;                               //The port #. It is always 3306

    
if(!mysql_connect("localhost","root",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("people"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
      $conn = mysql_connect('localhost', 'root', '');
	  $db   = mysql_select_db('c9');

?>
