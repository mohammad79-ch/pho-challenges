<?php

//A word has been split into a left part and a right part. Re-form the word by adding both halves together,
// changing the first character to an uppercase letter.

    function get_word($first,$second){

        $first=ucfirst($first);

        $final = $first . $second;

        return $final;
    }


    echo get_word("mamad",'ch');
