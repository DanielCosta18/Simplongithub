<?php

    $response = @file_get_contents("https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/".$_GET['name']."?RGAPI-f20459c0-0e21-40cf-ba21-586d1160615d");

if ($response === FALSE){
    $response = '{"id": "none","accountId": "none","puuid": "none","name": "inconnu","profileIconId": 0,"revisionDate": 0, "summonerLevel": 0}';
}

echo $response;

?>