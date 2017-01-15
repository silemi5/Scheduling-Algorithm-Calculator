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
                                <td>CT1</td>
                                <td>TT</td>
                                <td>WT</td>
                            </tr>
                        ");
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>