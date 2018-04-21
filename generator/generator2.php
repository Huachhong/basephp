<?php
/*
演示生成器
*/
ini_set('memory_limit', '10M');
function createRange($num) {
    for($i=0; $i < $num; $i++) {
        yield time(); 
    }
}

$result = createRange(1000000);

foreach($result as $value) {
    sleep(1);
    echo $value . PHP_EOL;
}


