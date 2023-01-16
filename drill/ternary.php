<?php

//11. Ternary exercises
$gender = "F";
$title = ($gender == "M")? "mister" : "miss";

$hello = "Hello {$title}";

echo $hello;