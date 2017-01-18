<?php
    if(isset($_POST['process']))
    {
        $NumProcess = $_POST['process'];
        $AT = $_POST['AT'];
        $BT = $_POST['BT'];
        $Prio = $_POST['Prio'];
    }
    else
        exit("Error!");
    
    //populates the inital queue
    for($x = 0; $x < $NumProcess; $x++)
        $queue[] = $x;
        
    $CT[] = 0;

    //rearranges the queue
    for($x = 1; $x < $NumProcess; $x++)
    {
        for ($y = 1; $y < $NumProcess; $y++)
        {
            if ($AT[$queue[$y]] < $AT[$queue[$y - 1]])
            {
                $temp = $queue[$y];
                $queue[$y] = $queue[$y - 1];
                $queue[$y - 1] = $temp;
            }
        }
    }

//calculates the CT, TT, and WT
    $time = 0;
    for($x = 0; $x < $NumProcess; $x++)
    {
        $time += $BT[$queue[$x]];
        $CT[$queue[$x]] = $time;
    }
    
//calculates the TT, WT
    for($x = 0; $x < $NumProcess; $x++)
    {
        $TT[] = $CT[$x] - $AT[$x];
        $WT[] = $TT[$x] - $BT[$x];
    }
    include("common.php");   
?>