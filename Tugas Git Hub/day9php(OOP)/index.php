<?php
require_once "animal.php";
require_once "ape.php";
require_once "frog.php";
$ayam = new animal('shaun','4','no<br>');
$ayam->output_hewan();

$kambing = new animal('buduk', 4, 'no<br>');
$kambing->output_hewan();

$kera = new ape('kerasakti', 2, "no<br>");
$kera->output_hewan();
$kera->yell();

$katak = new frog('katak', 4, "no");
$katak->output_hewan();
$katak->jump();


?>