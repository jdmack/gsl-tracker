<?php

    include("../gsl-dl.php");

    echo "\n";

    // select test
    echo "select() test: \n";
    $results = dl_select("r32gam1g1");
    echo "\tresults: \n";
    foreach($results as $cell) {
        echo "$cell\t{$results[$cell]}\n";
    }

    echo "\n";
/*
    // selectAll test
    echo "selectAll() test: \n";
    $results = dl_selectAll();
    echo "\tresults: \n";
    foreach($results as $cell) {
        echo "$cell\t{$results[$cell]}\n";
    }

    echo "\n";

    // update test

    echo "update() test: \n";
    $results = dl_selectAll();
    echo "\tresults: \n";
    foreach($results as $cell) {
        echo "$cell\t{$results[$cell]]}\n";
    }

    // updateAll test
    */

?>
