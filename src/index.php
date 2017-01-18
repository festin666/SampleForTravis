<?php
namespace Festin666\TravisCiTest;

require "../vendor/autoload.php";

$url = $argv[1];
$p = new Super($url);
$p->getPicturePage();
$p->processKeywords();
print_r($p->getKeywords());