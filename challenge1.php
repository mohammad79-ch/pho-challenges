<?php

// if the string is sortable or not

function isInOrder($str) {

    $first = str_split($str);
    $secend = str_split($str);

    sort($first);

    foreach ($first as $key=>$value){
        if ($value == $secend[$key] && $first[1] == $secend[1]){
            return "hast";
        }

        return "nist";
    }


}
   echo isInOrder("adfaegferghkrejgoi3jo");
