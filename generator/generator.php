<?php
/*
演示生成器
*/
ini_set('memory_limit', '500M');
function createRange($num) {
    $data = [];
    for($i=0; $i < $num; $i++) {
        $data[] = time(); 
    }
    return $data;
}

$result = createRange(1000000);

foreach($result as $value) {
    sleep(1);
    echo $value . PHP_EOL;
}
