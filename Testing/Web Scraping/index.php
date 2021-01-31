<?php
$url = 'https://www3.animeflv.net/ver/haikyuu-1';
$html = file_get_contents($url); //Convierte la información de la URL en cadena

if (strpos($url, "animeflv")) {
$vid = substr($html, strpos($html, "GoCDN"));
$vid = substr($vid, strpos($vid, "https"));
$vid = substr($vid, 0, strpos($vid, '"'));

header("Location: $vid");
} else {
    header("Location: $url");
}