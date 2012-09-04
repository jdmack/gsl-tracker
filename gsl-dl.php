<?php


    function dl_createPDO()
    {
        $host     = "localhost";
        $dbname   = "gsl-tracker";
        $username = "gsltracker";
        $password = "9Wa5r2A8YTxbZAd&K3B5";

        $DBH = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

        return $DBH;
    }

    function dl_select($cell)
    {
        try {
            $DBH = dl_createPDO();
            //$STH = $DBH->prepare("SELECT name,value FROM status WHERE name=':name'");
            $STH = $DBH->prepare("SELECT name,value FROM status");
            $STH->bindParam(':name', $cell);
            $STH->setFetchMode(PDO::FETCH_ASSOC);

            $values = array();
            while($row = $STH->fetch()) {
                $values[$row['name']] = $row['value'];
                print_r($row);
            }

        }

        catch(PDOException $e) {
            echo $e->getMessage();
            $values = null;
        }

        $DBH = null;
        return $values;
    }

    function dl_selectAll()
    {
        try {
            $DBH = dl_createPDO();
            $STH = $DBH->query("SELECT name,value FROM status");
            $STH->setFetchMode(PDO::FETCH_ASSOC);

            $values = array();
            while($row = $STH->fetch()) {
                $values[$row['name']] = $row['value'];
            }

        }

        catch(PDOException $e) {
            echo $e->getMessage();
            $values = null;
        }

        $DBH = null;
        return $values;

    }

    function dl_update($cell, $value)
    {
        try {
            $DBH = dl_createPDO();
            $STH = $DBH->prepare("UPDATE status SET value=:value WHERE name = :name");
            $STH->bindParam(':name', $cell);
            $STH->bindParam(':value', $value);
            
            $STH->execute();

        }

        catch(PDOException $e) {
            echo $e->getMessage();
        }

        $DBH = null;
    }

    function dl_updateAll($values)
    {
        try {
            $DBH = dl_createPDO();
            foreach($values as $value) {

                $STH = $DBH->prepare("UPDATE status SET value=:value WHERE name = :name");
                $STH->bindParam(':name', $values['cell']);
                $STH->bindParam(':value', $values['value']);
                
                $STH->execute();
            }

        }

        catch(PDOException $e) {
            echo $e->getMessage();
        }

        $DBH = null;

    }
    
?>
