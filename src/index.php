<?php
$students = ['Sabbir', 'sayhaN', 'saDaf'];
function caseChange($data, $callback)
{
    $result = [];
    foreach ($data as $value) {
        $result[] = $callback($value);
    }
    return $result;
}

$result = caseChange($students, function ($value) {
    return strtoupper($value);
});

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
$even = array_filter($arr, function ($value) {
    return $value % 2 == 0;
//    if ($value % 2 == 0) {
//        return $value;
//    }
});
print_r($even);