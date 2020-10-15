`Polodev\ConvertCase\Convert` class having some utility method to change case. Following case change is available  

* title_case
* upper_case
* lower_case
* snake_case
* screaming_snake_case
* camel_case
* pascal_case
* separate_words
* dot_case
* dash_case
* separate_with_forward_slashes
* separate_with_back_slashes

~~~php
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
~~~ 

## using static function 

~~~php
$text = "hello world from dHaka, Bangladesh.";
echo Convert::to_title_case($text); // Hello World From Dhaka Bangladesh
echo Convert::to_lower_case($text); // hello world from dhaka bangladesh
echo Convert::to_upper_case($text); // HELLO WORLD FROM DHAKA BANGLADESH
echo Convert::to_snake_case($text); // hello_world_from_dhaka_bangladesh
echo Convert::to_screaming_snake_case($text); // HELLO_WORLD_FROM_DHAKA_BANGLADESH
echo Convert::to_camel_case($text); // helloWorldFromDhakaBangladesh
echo Convert::to_pascal_case($text); // HelloWorldFromDhakaBangladesh
echo Convert::to_separate_words($text, "__&&__"); // hello__&&__world__&&__from__&&__dhaka__&&__bangladesh
echo Convert::to_dot_case($text); // hello.world.from.dhaka.bangladesh
echo Convert::to_dash_case($text); // hello-world-from-dhaka-bangladesh
echo Convert::to_separate_with_forward_slashes($text); // hello/world/from/dhaka/bangladesh
echo Convert::to_separate_with_back_slashes($text); // hello\world\from\dhaka\bangladesh
~~~

