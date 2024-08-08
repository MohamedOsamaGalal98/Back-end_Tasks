<?php

require 'BookStore.php';
require 'Books.php';

$Book1 = new Books\Books("Engineering","Mechatronics","2016","Mohamed Osama");
echo "<pre>"; var_dump($Book1); echo "</pre>";


$Book2 = new Books\Books("Science","Physics","1800","Hassan");
echo "<pre>"; var_dump($Book2); echo "</pre>";

