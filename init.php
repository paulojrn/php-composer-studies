<?php

require "vendor/autoload.php";
require "src/Tracker.php";

use Alura\Tracker\Tracker;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client([
    "base_uri" => "https://www.alura.com.br/"
]);
$crawler = new Crawler();

$tracker = new Tracker($client, $crawler);
$courses = $tracker->search("/cursos-online-programacao/php");

foreach ($courses as $course) {
    echo $course . PHP_EOL;
}