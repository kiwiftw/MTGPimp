<?php
## Load json into memory for faster parsing
## Function calls for everything
## Maintain 
## Create admin portal that allows for adding new cards and sets and such (pass url to download card art)
## Parse the JSON and remove online only sets
## Parse json and remove extranious information. 
## Remove from Set Information: "gathererCode", "magicCardsInfoCode","releaseDate","type","booster","mkm_name","mkm_id"
## Remove from Card Infommation: "cmc", "colorIdentity","colors","flavor","id",'imageName,'layout','manaCost','mciNumber','multiverseid','power','rarity','subtypes','text','toughness','type','types'
error_reporting(E_ALL ^ E_NOTICE);
function loadJson(){
	$file = './AllCards-x.json';
	$jsonData = file_get_contents($file, true);
	$json = json_decode($jsonData, true);
	return $json;
}

function getEditions($cardName){
	#print($cardName);
	$json = loadJson();
	$edition = [];
	foreach($json[$cardName]["printings"] as $set){
		array_push($edition, $set);
	}
	return $edition;
}

function getFoils($set, $language, $cardName){
	## grab stuff from 
	$cardURL = "../MTGImages/" . $set . "/foil/" . $language . "/" . $artCardName . ".jpg"; 
}

function getForeign($name) {
	
}

function getCard($name) {

}

function getImage($name, $set, $language) {

}
/*
{"LEA":{
	"name":"Limited Edition Alpha",
	"code":"LEA",
	"gathererCode":"1E",
	"magicCardsInfoCode":"al",
	"releaseDate":"1993-08-05",
	"border":"black",
	"type":"core",
	"booster":["rare","uncommon","uncommon","uncommon","common","common","common","common","common","common","common","common","common","common","common"],
	"mkm_name":"Alpha",
	"mkm_id":1,
	"cards":[{
		"artist":"Richard Thomas",
		"cmc":5,
		"colorIdentity":["U"],
		"colors":["Blue"],
		"flavor":"These spirits of the air are winsome and wild, and cannot be truly contained. Only marginally intelligent, they often substitute whimsy for strategy, delighting in mischief and mayhem.",
		"id":"926234c2fe8863f49220a878346c4c5ca79b6046",
		"imageName":"air elemental",
		"layout":"normal",
		"manaCost":"{3}{U}{U}",
		"mciNumber":"47",
		"multiverseid":94,
		"name":"Air Elemental",
		"power":"4",
		"rarity":"Uncommon",
		"subtypes":["Elemental"],
		"text":"Flying",
		"toughness":"4",
		"type":"Creature — Elemental",
		"types":["Creature"]},
*/	
?>