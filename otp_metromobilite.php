<?php

$base = "http://data.metromobilite.fr/api/routers/default/isochrone";
header("Content-Type: application/json");
echo file_get_contents("{$base}?{$_SERVER['QUERY_STRING']}");
