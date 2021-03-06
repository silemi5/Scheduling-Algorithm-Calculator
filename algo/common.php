<?php
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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <table border=1>
            <thead>
                <tr>
                    <th>Process</th>
                    <th>AT</th>
                    <th>BT</th>
                    <th>Priority</th>
                    <th>CT</th>
                    <th>TT</th>
                    <th>WT</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    for($x = 0; $x < $NumProcess; $x++)
                    {
                        print
                        ("
                            <tr>
                                <td>P" . ($x + 1) . "</td>
                                <td>" . $AT[$x] . "</td>
                                <td>" . $BT[$x] . "</td>
                                <td>" . $Prio[$x] . "</td>
                                <td>" . $CT[$x] . "</td>
                                <td>" . $TT[$x] . "</td>
                                <td>" . $WT[$x] . "</td>
                            </tr>
                        ");
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>