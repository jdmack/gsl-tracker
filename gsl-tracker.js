    function cSwap(cell)
    {
        if (cell.className == "watched") {
            cell.className = "unwatched";
        }
        else if (cell.className == "unwatched") {
            cell.className = "watched";
        }
    }

