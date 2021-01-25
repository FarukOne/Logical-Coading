<?php

$number = 123645654654;


$fmt = numfmt_create( 'de_DE', NumberFormatter::CURRENCY );
echo numfmt_format_currency($fmt, $number, "EUR")."<br>";
echo numfmt_format_currency($fmt, $number, "INR")."<br>";
echo number_format($number, '2', '.', ',');
