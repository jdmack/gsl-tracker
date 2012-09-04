<?php

    // Read request
    /* Actions:
        - select(cell)
        - selectAll()
        - update(cell, value)
        - updateAll(array)  
    */
    if(isset($_GET['action'])) 
    {
        $action = $_GET['action'];
    }
    // Validate inputs




    // Perform request
    if($action == "select")
    {
        $cell = $_GET['cell'];
        $return = gsl_select($cell);

    }
    else if($action == "selectAll")
    {
        $return = gsl_selectAll();    
    }
    else if($action == "update")
    {
        $cell = $_GET['cell'];
        $value = $_GET['value'];
        $return = gsl_update($cell, $value);

    }
    else if($action == "updateAll")
    {
        $values = $_GET['values'];

        $return = gsl_updateAll($values);
    }
    

    // Return data




?>
