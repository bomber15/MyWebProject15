<?php

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
    if(isset($_SERVER['HTTP_REFERER'])){
    header("Location: " . $_SERVER['HTTP_REFERER']);  
    }
    else {
    echo "An Error";
}
?>
