<?php


function fizBus($nummer){
    if ($nummer%3==0){
        return 'fiz';
    } 
    elseif ($nummer%5==0){
        return 'Bus';
    }
    else {
        return $nummer;
    }
}

for ($i=1;$i<100;$i++){
    echo fizBus($i).'<br>';
}
 