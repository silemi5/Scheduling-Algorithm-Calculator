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

    //rearranges the queue by AT
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

    //arranges the queue by BT
    for($x = 1; $x < $NumProcess; $x++)
    {
        for ($y = 1; $y < $NumProcess; $y++)
        {
            if ($y != (count($queue) - 1) && $BT[$queue[$y]] > $BT[$queue[$y + 1]])
            {
                $temp = $queue[$y];
                $queue[$y] = $queue[$y + 1];
                $queue[$y + 1] = $temp;
            }
        }
    }
     include("common.php");              
?>
