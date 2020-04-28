<?php

header("X-Content-Type-Options: nosniff");
header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");

include("../config.php");

$convert = new Config();
$convert->createjson($_GET["sentence"]);
