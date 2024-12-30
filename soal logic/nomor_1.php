<?php

$rows = 6;

for ($i = 0; $i < $rows; $i++) {
    echo str_repeat("*", $i + 1);
    echo str_repeat("0", $rows - $i);
    echo "\n";
}

?>