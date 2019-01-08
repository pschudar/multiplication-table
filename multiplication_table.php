<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Multiplication Table</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 7px;
            }
            tr {
                background-color: #def;
            }
            tr:nth-child(odd) {
                background-color: #cde;      
            }
            th {
                background-color: #6495ed;
            }
        </style>
    </head>
    <body>
        <h1>Multiplication Table</h1>
        <table>
            <?php
            # Write the table headers
            echo '<tr>';
            echo '<th>&nbsp;</th>';
            for ($c = 1; $c <= 12; $c++) {
                echo "<th>$c</th>";
            }
            echo '</tr>';
            for ($r = 1, $c = 1; $r <= 12; $r++) :
                echo '<tr>';
                if ($c == 1) {
                    echo "<th>$r</th>";
                }
                while ($c <= 12) :
                    echo '<td>' . $r * $c++ . '</td>';
                endwhile;
                echo '</tr>';
                # reset column counter at the end of each table row
                $c = 1;
            endfor;
            ?>
        </table>
    </body>
</html>
