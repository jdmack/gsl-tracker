<?php
    require_once('gsl-dal.php');

    // Read request
    /* Actions:
        - select(name)
        - selectAll()
        - update(name, value)
        - updateAll(array)  
    */
    if(isset($_GET['action'])) 
    {
        $action = $_GET['action'];
        //echo "action: $action\n";

    // Validate inputs



        // Perform request
        if($action == "select")
        {
            $name = $_GET['name'];
            $return = dal_select($name);

        }
        else if($action == "selectAll")
        {
            $return = dal_selectAll();    
            $json = json_encode($return);
            echo $json;
        }
        else if($action == "update")
        {
            //echo "performing update";
            $name = $_GET['name'];
            $value = $_GET['value'];
            //echo "name: $name";
            //echo "value: $value";
            dal_update($name, $value);
            //echo "update done";

        }
       /*
        else if($action == "updateAll")
        {
            $values = $_GET['values'];

            $return = dal_updateAll($values);
        }
        */
    }

    else {
        echo "no action provided";
    }
    

    // Return data



?>
