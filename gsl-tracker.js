    function cSwap(cell)
    {
        updateStatus("updating cell: " + cell.id);
        if (cell.className == "watched") {
            cell.className = "unwatched";
            updateValue(cell.id, "unwatched");
        }
        else if (cell.className == "unwatched") {
            cell.className = "watched";
            updateValue(cell.id, "watched");
        }
    }

    function init()
    {
        updateStatus("init");
        selectAllValues();
    }

    function initializeGrid(values)
    {
        updateStatus("initializeGrid()");
        console.log(values);
        for(cell in values) {
            document.getElementById(cell).className = values[cell];
        }
        updateStatus("grid initialized");
    }

    function updateValue(id, value)
    {
        updateStatus("updateValue(" + id + ", " + value + ")");
        var xmlhttp;
        xmlhttp = new XMLHttpRequest();    

        xmlhttp.onreadystatechange = function()
        {
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                // do something with response
                updateStatus("response recieved");
            }
        }

        xmlhttp.open("GET","http://192.168.1.10/gsl-tracker/gsl-service.php?action=update&name=" + id + "&value=" + value,true);
        xmlhttp.send();

    }

    function selectAllValues()
    {
        updateStatus("selectAllValues()");
        var xmlhttp;
        xmlhttp = new XMLHttpRequest();    
        var values = 
        xmlhttp.onreadystatechange = function()
        {
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                // do something with response
                updateStatus("selectAllValues reeived");
                var values = eval ("(" + xmlhttp.responseText + ")");
                initializeGrid(values);
            }
        }

        xmlhttp.open("GET","http://192.168.1.10/gsl-tracker/gsl-service.php?action=selectAll", true);
        xmlhttp.send();

    }

    function updateStatus(message)
    {
        document.getElementById("status").innerHTML=message;
    }
