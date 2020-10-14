<?php 
require __dir__ . '/index.php';

use Polodev\ConvertCase\Convert;

// title_case
$text = "hello world from dHaka, Bangladesh.";
$convert = new Convert( $text );
echo $convert->title_case()->output(); // Hello World From Dhaka Bangladesh
echo "</br>";

// upper_case
$text = "hello world from dHaka, Bangladesh.";
$convert = new Convert( $text );
echo $convert->upper_case()->output(); // HELLO WORLD FROM DHAKA BANGLADESH
echo "</br>";

// lower_case
$text = "hello world from dHaka, Bangladesh.";
$convert = new Convert( $text );
echo $convert->lower_case()->output(); // hello world from dhaka bangladesh

echo "</br>";

// snake_case
$text = "hello world from dHaka, Bangladesh.";
$convert = new Convert( $text );
echo $convert->snake_case()->output(); // hello_world_from_dhaka_bangladesh
echo "</br>";

// screaming_snake_case
$text = "hello world from dHaka, Bangladesh.";
$convert = new Convert( $text );
echo $convert->screaming_snake_case()->output(); // HELLO_WORLD_FROM_DHAKA_BANGLADESH
echo "</br>";

// camel_case
$text = "hello world from dHaka, Bangladesh.";
$convert = new Convert( $text );
echo $convert->camel_case()->output(); // helloWorldFromDhakaBangladesh
echo "</br>";

// pascal_case
$text = "hello world from dHaka, Bangladesh.";
$convert = new Convert( $text );
echo $convert->pascal_case()->output(); // HelloWorldFromDhakaBangladesh
echo "</br>";

// dot_case
$text = "hello world from dhaka, bangladesh.";
$convert = new convert( $text );
echo $convert->dot_case()->output(); // hello.world.from.dhaka.bangladesh
echo "</br>";

// dash_case
$text = "hello world from dhaka, bangladesh.";
$convert = new convert( $text );
echo $convert->dash_case()->output(); // hello-world-from-dhaka-bangladesh
echo "</br>";











