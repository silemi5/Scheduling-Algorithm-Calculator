<?php
    if(isset($_POST['process']))
    {
        $NumProcess = $_POST['process'];
        $AT = $_POST['AT'];
        $BT = $_POST['BT'];
        $Prio = $_POST['Prio'];
        $BTRemaining = $BT;
    }
    else
        exit("Error!");

    //Gets the maximum time
    $MaxTime = 0;
    for($x = 0; $x < count($AT); $x++)
    {
        $MaxTime += $BT[$x];
        $CT[] = 0;
        if($AT[$x] == min($AT))
        {
            $NowProcess = $x;
        }
    }

    for($time = 0; $time <= $MaxTime; $time++)
    {
        if($time == 2)
        {
            $gh = "bruh";
        }
        if ($time <= max($AT))
        {
            if ($time == $AT[$time] && $BTRemaining[$time] < $BTRemaining[$NowProcess])
            {
                $NowProcess = $AT[$time];
            }
        }

        elseif ($time > max($AT))
        {
            if(min($BTRemaining) < $BTRemaining[$NowProcess])
            {
                $NowProcess = array_search(min($BTRemaining), $BTRemaining);
            }
        }

        $BTRemaining[$NowProcess]--;
        //If the current process has finished its work
        if($BTRemaining[$NowProcess] == 0)
        {
            $CT[$NowProcess] = $time;
            $BTRemaining[$NowProcess] = 99999;
        }
    }
    print("Testing");
    //for($time = 0; $time)
    //include("common.php");   
?>