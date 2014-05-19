<?php


    function dal_createConnection()
    {
        $host     = "localhost";
        $dbname   = "gsl";
        $username = "gsltracker";
        $password = "9Wa5r2A8YTxbZAd&K3B5";

        $mysqli = new mysqli($host, $username, $password, $dbname);

        if(mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        return $mysqli;
        
    }


    function dal_select($name)
    {
        $mysqli = dal_createConnection();

        $query = "SELECT name,value FROM status where name='$name'";

        $result = $mysqli->query($query) or die($mysqli->error.__LINE__ . "\n");

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $return = array($row['name'] => $row['value']);
            return $return;
        }
        else {
            echo "No Results Found";
            return null;
        }
    }

    function dal_selectAll()
    {
        $mysqli = dal_createConnection();

        $query = "SELECT name,value FROM status";

        $result = $mysqli->query($query) or die($mysqli->error.__LINE__ . "\n");

        if($result->num_rows > 0) {
            $return = array();
            while($row = $result->fetch_assoc()) {
                //array_push($return, array($row['name'] => $row['value']));
                $return[$row['name']] = $row['value'];
            }
            return $return;
        }
        else {
            echo "No Results Found";
            return null;
        }

    }

    function dal_update($name, $value)
    {
        echo "in dal";
        $mysqli = dal_createConnection();

        $query = "UPDATE status SET value='$value' WHERE name='$name'";

        $result = $mysqli->query($query) or die($mysqli->error.__LINE__ . "\n");

        if($result) {
        }
        else {
            echo "Error occured";
        }
        echo "done";
    }

    /*
    function dal_updateAll($values)
    {

    }
    */
    
?>
