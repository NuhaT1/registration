<?php


$name = "John";
$age = 25;

echo "Hello, my name is " . $name . " and I am " . $age . " years old.";


if ($age >= 18) {
    echo " I am an adult.";
} else {
    echo " I am a minor.";
}


echo "<ul>";
for ($i = 1; $i <= 5; $i++) {
    echo "<li>Item " . $i . "</li>";
}
echo "</ul>";

?>