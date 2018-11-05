<?php

$un=$_POST['username'];
$pw=$_POST['password'];
$gndr=$_POST['gender'];

$filename=time().".xml";
$xml = new XMLWriter();
    $xml->openMemory();
    //$xml->openURI("php://output");  //print on screen no file output
    $xml->setIndent(true);
    $xml->startDocument('1.0', 'UTF-8');
    $xml->startElement('information');
    
      $xml->startElement("userdata");
	  $xml->writeElement("username",$un);
	  //$xml->endElement();
	  //$xml->startElement("password");
      $xml->writeElement("password",$pw);
	  //$xml->endElement();
	  //$xml->startElement("gender");
      $xml->writeElement("gender",$gndr);
      $xml->endElement();

    $xml->endElement();
    $xml->endDocument();

    //header('Content-type: text/xml'); //print on screen no file output with output memory
    //echo $xml->outputMemory(); //print on screen no file output with output memory
    
    $file = $xml->outputMemory();
    file_put_contents($filename,$file);
    
    //$xml->flush(); //print on screen no file output

echo "XML write successful! <a href='index.php'>go back</a>";
?>