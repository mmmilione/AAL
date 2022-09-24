<?php 

function cutKey($key, $interval){
    if(!$key){
        return $key;
    }
    
    $newKey = '';
    for($i = 0; $i < strlen($key); $i++){
        if($i % $interval == 0){
            $newKey .= ' ';
        }
        $newKey .= $key[$i];
    }
    
    return $newKey;
};

?>