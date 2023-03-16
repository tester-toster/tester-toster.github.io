<?php error_reporting(0);

saveFile();

function saveFile():void {

    // $html = file_get_contents('https://vadimklimenko.com/map/statuses.json?'.$_GET['time']);

    $html = file_get_contents('https://vadimklimenko.com/map/statuses.json?'.time());


    $html = json_decode($html, true);
    $html["version"] = time();
    $html["info"] = "https://alertmap.ru/";

    $html = json_encode($html, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_FORCE_OBJECT);

    print_r($html);

    // echo $_GET['time'];

};
?>







