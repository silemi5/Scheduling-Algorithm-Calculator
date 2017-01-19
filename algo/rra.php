<?php
    if(isset($_POST['process']))
        {
            $NumProcess = $_POST['process'];
            $AT = $_POST['AT'];
            $BT = $_POST['BT'];
            $BT_Remaining = $BT;
            $Prio = $_POST['Prio'];
            $TQ = $_POST['TQ'];
        }
        else
            exit("Error!");

        //placeholder for Completion Time
        for($x = 0; $x < count($AT); $x++)
        {
            $CT[] = -1;
        }
        
        //puts the first arriving process to queue
        $queue[] = 0;
        $order = 0;

        //Limiter!
        $limit = 0;

        //starts the process
        for($time = 0; $time != array_sum($BT); $time++)
        {
            //lets execute the next in line ;)
            $BT_Remaining[$queue[$order]]--;

            //He's dead, Jim. Next!
            if($BT_Remaining[$queue[$order]] == 0)
            {
                $order++;
            }
            $limit++;
            if($limit == 3)
            {
                $limit = 0;
                $queue[] = $queue[$order];
                $order++;
            }

            //who will be the next to be executed?
            for($x = 0; $x < count($AT); $x++)
            {
                if($time == $AT[$x] && $time != 0)
                    $queue[] = $AT[$x];
            }
        }
        print("Hi");
    
?>