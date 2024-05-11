<?php

/*
$xml = new DOMDocument();
$xml->load('example.xml');

// Načtení XSD schématu
$validator = new DOMDocument();
$validator->load('schema.xsd');

// Validace XML dokumentu
if ($xml->schemaValidate($validator)) {
    echo "XML je platné podle schématu.";
} else {
    echo "XML není platné podle schématu.";
}
*/
session_start();
if (!isset($_SESSION['player'])) {
    $_SESSION['player'] = array();
}
if (!isset($_SESSION['prisera'])) {
  $_SESSION['prisera'] = array();
}
if (!isset($_SESSION['hraStarted'])) {
    $_SESSION['hraStarted'] = true;
    InstantiateGame();
  }

$xmlSouboryPriser = array();

if (isset($_GET['function'])) {
    $functionName = $_GET['function'];
    switch ($functionName) {
        case 'utok':
            Utok();
            break;
        case 'nacti':
            InstantiateGame();
            break;
        case 'priseraData':
            EchoPrisera();
            break;
        case 'hracData':
            EchoHrac();
            break;
    }
}
function EchoHrac(){
    echo json_encode($_SESSION['player']);
}
function EchoPrisera(){
    echo json_encode($_SESSION['prisera']);
}
function InstantiateGame(){
    PridejPriseru("xml/prisery.xml");
    NactiHrace();
    NactiNovouPriseru();
}
function Utok() {
    $_SESSION['prisera']["vlastnosti"]["hp"] -= $_SESSION['player']["vlastnosti"]["dmg"];
    if($_SESSION['prisera']["vlastnosti"]["hp"] <= 0){
        OdmenHrace();
        NactiNovouPriseru();
    }
    echo json_encode($_SESSION['prisera']);
}
function OdmenHrace(){
    $_SESSION['player']["vlastnosti"]["gold"] += $_SESSION['prisera']["vlastnosti"]["loot"];
}
function NactiHrace(){
    global $player;
    $xml = simplexml_load_file(__DIR__ . '/xml/postava.xml');
    $_SESSION['player']['jmeno'] = (string) $xml->jmeno;
    $_SESSION['player']['vlastnosti'] = array(
        'dmg' => (int) $xml->vlastnosti->dmg,
        'spd' => (int) $xml->vlastnosti->spd,
        'greed' => (int) $xml->vlastnosti->greed,
        'gold' => (int) $xml->vlastnosti->gold
    );
    $_SESSION['player']['inventar'] = array();
}

function NactiNovouPriseru() {
    $xml = simplexml_load_file(__DIR__ . '/xml/prisery.xml');
    $xmlPrisery = $xml->prisera;    
    $randomIndex = rand(0, count($xmlPrisery) - 1);
    $randomPrisera = $xmlPrisery[$randomIndex];
    $_SESSION['prisera']['jmeno'] = (string) $randomPrisera->jmeno;
    $_SESSION['prisera']['imgPath'] = (string) $randomPrisera->imgPath;
    $_SESSION['prisera']['vlastnosti'] = array(
        'hp' => (int) $randomPrisera->vlastnosti->hp,
        'armor' => (int) $randomPrisera->vlastnosti->armor,
        'speed' => (int) $randomPrisera->vlastnosti->speed,
        'loot' => (int) $randomPrisera->vlastnosti->loot
    );
}

// nahrávání, kontrola via xsd
function PridejPriseru($path) {
    global $xmlSouboryPriser;
    $xmlSouboryPriser[] = $path;
}

?>