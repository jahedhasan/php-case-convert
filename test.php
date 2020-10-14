<?php 
use Polodev\ConvertCase\Convert;
require __dir__ . '/index.php';


$text = "hello world from dHaka, Bangladesh.";

// title_case
$convert = new Convert( $text );
echo $convert->title_case()->output(); // Hello World From Dhaka Bangladesh
echo "</br>";

// upper_case
$convert = new Convert( $text );
echo $convert->upper_case()->output(); // HELLO WORLD FROM DHAKA BANGLADESH
echo "</br>";

// lower_case
$convert = new Convert( $text );
echo $convert->lower_case()->output(); // hello world from dhaka bangladesh

echo "</br>";

// snake_case
$convert = new Convert( $text );
echo $convert->snake_case()->output(); // hello_world_from_dhaka_bangladesh
echo "</br>";

// screaming_snake_case
$convert = new Convert( $text );
echo $convert->screaming_snake_case()->output(); // HELLO_WORLD_FROM_DHAKA_BANGLADESH
echo "</br>";

// camel_case
$convert = new Convert( $text );
echo $convert->camel_case()->output(); // helloWorldFromDhakaBangladesh
echo "</br>";

// pascal_case
$convert = new Convert( $text );
echo $convert->pascal_case()->output(); // HelloWorldFromDhakaBangladesh
echo "</br>";

// dot_case
$convert = new convert( $text );
echo $convert->dot_case()->output(); // hello.world.from.dhaka.bangladesh
echo "</br>";

// dash_case
$convert = new convert( $text );
echo $convert->dash_case()->output(); // hello-world-from-dhaka-bangladesh
echo "</br>";











