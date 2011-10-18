<?php

$outputdir = "reports";

if ($_SERVER["REQUEST_METHOD"] != "POST") exit("Get lost :)");

$xml = file_get_contents("php://input");

if (!preg_match('[id(?:>|=")([0-9a-f]{32})[<"]]', $xml, $m)) exit("ID");
$id = $m[1];


if (preg_match("[<event]", $xml)) exit("Event");  // Events not supported yet.

file_put_contents("$outputdir/$id.xml", $xml);
?>OK
