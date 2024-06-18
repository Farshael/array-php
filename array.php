<?php
$angka = [1, 2, 3, 4, 5];
$target = 4;

function find_target($angka, $target) {
    foreach ($angka as $index => $angka) {
        if ($angka == $target) {
            return "Target has been reached in index number $index";
        }
    }
    return "Target not found in array data";
}


$output = find_target($angka, $target);
echo $output . "\n";

// Case 1
$angka1 = [1, 2, 3, 4, 5];
$target1 = 4;
echo find_target($angka1, $target1) . "\n";

// Case 2
$angka2 = [2, 4, 3];
$target2 = 4;
echo find_target($angka2, $target2) . "\n";

// Case 3
$angka3 = [1, 5, 8, 9];
$target3 = 2;
echo find_target($angka3, $target3) . "\n";
?>

