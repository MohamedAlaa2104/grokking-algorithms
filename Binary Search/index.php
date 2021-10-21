<?php

function binarySearch($list, $item) : int
{
    $low = 0;
    $high = count($list) - 1;

    while ($low <= $high) {
        $mid = round( ($low + $high) / 2 );
        $guess = $list[$mid];

        if ($guess == $item) {
            return $mid;
        }
        if ($guess < $item) {
            $low = $mid + 1;
        }else {
            $high = $mid - 1;
        }
    }
    return -1;
}

$list = array();
for ($i = 1; $i <= 1000000; $i++){
    $list[$i - 1] = $i;
}
$result = binarySearch($list, 489248);

if ($result > 0) {
    echo 'The result has an index of: '. $result .' and the value is: ' . $list[$result];
}else {
    echo 'The item is not exist in the list.';
}
