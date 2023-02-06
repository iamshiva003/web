<!-- Write a program to create chess board in PHP using for loop -->
<html>
    <head>
        <title>Program 15</title>
    </head>
    <body>
        <h1>Chess Board</h1>

        <table border width="400">
            <?php
                for($row=1; $row<=8; $row++) {
                    echo "<tr>";
                    for($col=1; $col<=8; $col++) {
                        $total = $row + $col;
                        if(($total % 2) == 0) {
                            echo "<td width='30' height='30' bgcolor='black'></td>";
                        }
                        else {
                            echo "<td width='30' height='30' bgcolor='white'></td>";
                        }
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>