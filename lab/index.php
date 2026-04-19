<?php

$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Length = $length, Width = $width <br>";
echo "Area = $area <br>";
echo "Perimeter = $perimeter <br><br>";




$amount = 1000;
$vat = 0.15 * $amount;

echo "Amount = $amount <br>";
echo "VAT (15%) = $vat <br><br>";





$num = 7;

if ($num % 2 == 0) {
    echo "$num is Even <br><br>";
} else {
    echo "$num is Odd <br><br>";
}





$a = 10;
$b = 25;
$c = 15;

if ($a >= $b && $a >= $c) {
    echo "Largest = $a <br><br>";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest = $b <br><br>";
} else {
    echo "Largest = $c <br><br>";
}





for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
echo "<br><br>";





$arr = array(5, 10, 15, 20, 25);
$search = 15;
$found = false;

foreach ($arr as $value) {
    if ($value == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search found in array <br><br>";
} else {
    echo "$search not found in array <br><br>";
}







for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}


echo "<br>Number Pattern:<br>";
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}


$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
        $char++;
    }
    echo "<br>";
}

?>