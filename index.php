<?php  
require 'vendor/autoload.php';

use HelloWorld\SayHello as SayHello;

echo SayHello::world();

echo "<br/>" . print_r( SayHello::getColors(), true );
