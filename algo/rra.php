<?php
    if(isset($_POST['process']))
        {
            $NumProcess = $_POST['process'];
            $AT = $_POST['AT'];
            $BT = $_POST['BT'];
            $Prio = $_POST['Prio'];
            $TQ = $_POST['TQ'];
        }
        else
            exit("Error!");
        
        //starting process
        

        //round robin style
        for($time = 0;;$time++)
        {
            //process starts
            for($TimeLimit = 0; $TimeLimit <= $TQ; $TimeLimit++)
            {

            }
        }
    
?>