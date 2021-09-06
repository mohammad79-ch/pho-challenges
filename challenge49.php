<?php

/** Create a function to extract the name of the subreddit from its URL. */


function subReddit($link) {
    $rtrim = rtrim($link,'/');
    $arr = explode('/',$rtrim);

    return end($arr);
}


echo "<pre>";
die(var_dump(subReddit("https://www.reddit.com/r/relationships/")));