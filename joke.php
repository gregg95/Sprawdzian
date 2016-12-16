<?php


require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;

$url="http://ec2-35-156-131-145.eu-central-1.compute.amazonaws.com/list";

$rawData= json_decode(file_get_contents($url),true);

$option= $_GET["option"];




function getRandomJoke($p){
   $rand = rand(1,10);
   echo $p[$rand]['content'];

}

function getAllJokes($p){
   for($i=0; $i<10; $i++){
      echo $p[$i]['content'];
      echo "<br>";
   }
}

echo "<!DOCTYPE html><head><title>Jokes</title></head>";

//jezeli getRandomJoke to wybiera funkcje getRadomJoke
if(!strcmp($option, "getRandomJoke")){
   getRandomJoke($rawData);
} else {
   getAllJokes($rawData);
}



