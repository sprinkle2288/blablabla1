<?php
$rondom = [];
for ($x=0; $x<50; $x++) {
    $rondom[$x] = rand();
}
echo min ($rondom);
echo max ($rondom);
echo array_sum ($rondom)/50;