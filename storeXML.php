<?php

/*
 * PHP SimpleXML
 * Loading a XML from a file, adding new elements and editing elements
 */
//get name from form
$name = $_POST["name"];
$favteam = $_POST["favteam"];
$winner = $_POST["winner"];
$email = $_POST["email"];


if (file_exists('/home/ubuntu/workspace/xml/form.xml')) {
    //loads the xml and returns a simplexml object
    $xml = simplexml_load_file('/home/ubuntu/workspace/xml/form.xml');

    //transforming the object in xml format
    $xmlFormat = $xml->asXML();
    
    //adding new child to the xml
    $newChild = $xml->addChild('person');
    $newChild->addChild('name', $name);
    $newChild->addChild('favteam', $favteam);
    $newChild->addChild('winner', $winner);
    $newChild->addChild('email', $email);
    
    //$ItemString = $favteam+","+$winner;
  
} else {
    exit('Failed to open form.xml.');
}
    file_put_contents('/home/ubuntu/workspace/xml/form.xml', $xml->asXML());
    
    if(isset($_SERVER['HTTP_REFERER'])){
    header("Location: " . $_SERVER['HTTP_REFERER']);  
    }
    else {
    echo "An Error";
}
?>
