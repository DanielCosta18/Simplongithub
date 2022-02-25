<?php

	$response = @file_get_contents("https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/".$_GET['name']."?api_key=RGAPI-ce47c040-0b72-42a2-bc42-e4193d453478");

if ($response === FALSE){
	$response = '{"id": "none","accountId": "none","puuid": "none","name": "inconnu","profileIconId": 0,"revisionDate": 0, "summonerLevel": 0}';
}

echo $response;

?>