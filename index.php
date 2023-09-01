<?php

require_once "Personne.php";


$peter = new Personne();

$peter -> setName ("peter c'est une personne");
echo $peter -> getName();