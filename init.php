#!/usr/bin/env php
<?php

require "vendor/autoload.php";

use Alura\Tracker\Tracker;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client([
    "base_uri" => "https://www.alura.com.br/"
]);
$crawler = new Crawler();

$tracker = new Tracker($client, $crawler);
$tracker->search("/cursos-online-programacao/php");
$tracker->show();