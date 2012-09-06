<?php

    include("../gsl-dal.php");

    echo "\n";

    // select test
    echo "select() test: \n";

    $results = dal_select("r32gam1g1");
    foreach($results as $name => $value) {
        echo "$name\t$value\n";
    }
    echo "\n";

/*
    // selectAll test
    echo "selectAll() test: \n";
    $results = dal_selectAll();
    echo "\tresults: \n";
    foreach($results as $row) {
        foreach($row as $name => $value) {
            echo "$name\t$value\n";
        }
    }

    echo "\n";
*/

    // update test

    echo "update() test: \n";

    dal_update("r32gam1g1", "watched");

    $results = dal_select("r32gam1g1");
    foreach($results as $name => $value) {
        echo "$name\t$value\n";
    }
    echo "\n";
    dal_update("r32gam1g1", "unwatched");
    $results = dal_select("r32gam1g1");
    foreach($results as $name => $value) {
        echo "$name\t$value\n";
    }


?>
