<?php


/** Write a function that checks whether a person can watch an MA15+ rated movie.
 *
 * One of the following two conditions is required for admittance:
 */

function acceptIntoMovie($age, $isSupervised) {

    if ($age < 15 && $isSupervised == false){
        return false;
    }

    if ($age > 15 && $isSupervised == true){
        return false;
    }

    return true;

}


echo "<pre>";
die(var_dump(acceptIntoMovie(14,false)));