<?php
    $case = "Dahan dahan! Dahan dahan!";
    $name = "John Kenneth Prado";
    $string = "   Michel Jordan   ";
    $other = "Other 9 or more Built-in Functions"
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Built-in Functions Activity</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                padding: 20px;
            }

            h3 {
                margin-top: 40px;
                color: #444;
            }

            table {
                width: 80%;
                border-collapse: collapse;
                margin-bottom: 30px;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            }

            td {
                padding: 10px 15px;
                text-align: left;
                border: 1px solid #ccc;
            }

            tr:nth-child(even) {
                background-color:rgb(250, 178, 244);
            }

            tr:nth-child(odd) {
                background-color:rgb(248, 85, 235);
            }

            td:first-child {
                font-weight: bold;
                color: #333;
            }
        </style>
    </head>
    <body>
        <h3>Changing Case</h3>
        <table>
            <tr>
                <td>Lowercase</td>
                <td><?= strtolower($case); ?></td>
            </tr>
            <tr>
                <td>Uppercase</td>
                <td><?= strtoupper($case); ?></td>
            </tr>
            <tr>
                <td>Capitalize</td>
                <td><?= ucwords(strtolower($case)); ?></td>
            </tr>
        </table>

        <h3>Counting Characters and Words</h3>
        <table>
            <tr>
                <td>Number of Characters</td>
                <td><?= strlen($name); ?></td>
            </tr>
            <tr>
                <td>Number of Words</td>
                <td><?= str_word_count($name); ?></td>
            </tr>
        </table>

        <h3>Removing and Replacing Characters</h3>
        <table>
            <tr>
                <td>Remove whitespaces from left</td>
                <td><?= "."  . ltrim($string) .  "."; ?></td>
            </tr>
            <tr>
                <td>Remove whitespaces from right</td>
                <td><?= "."  . rtrim($string) .  "."; ?></td>
            </tr>
            <tr>
                <td>Remove whitespace from left and right</td>
                <td><?= "."  . trim($string) .  "."; ?></td>
            </tr>
            <tr>
                <td>String replace</td>
                <td><?= str_replace("Jordan", "Jonas", $string); ?></td>
            </tr>
            <tr>
                <td>String ireplace</td>
                <td><?= str_ireplace("michel", "Mich ", $string); ?></td>
            </tr>
            <tr>
                <td>String Repeat</td>
                <td><?= str_repeat("MJ ", 3); ?></td>
            </tr>
        </table>

        <h3>Other Built-in Functions</h3>
        <table>
            <tr>
                <td>Repeat String</td>
                <td><?= str_repeat($other, 2); ?></td>
            </tr>
            <tr>
                <td>Shuffle Characters</td>
                <td><?= str_shuffle($other); ?></td>
            </tr>
            <tr>
                <td>Pad String</td>
                <td><?= str_pad($other, 50, "*"); ?></td>
            </tr>
            <tr>
                <td>String Count</td>
                <td><?= strlen($other); ?></td>
            </tr>
            <tr>
                <td>Convert Special Characters</td>
                <td><?= htmlspecialchars($other); ?></td>
            </tr>
            <tr>
                <td>Wrap Text</td>
                <td><?= wordwrap($other, 10, "<br>"); ?></td>
            </tr>
            <tr>
                <td>Split String into Chunks</td>
                <td><?= chunk_split($other, 5, "-"); ?></td>
            </tr>
            <tr>
                <td>String Repeat</td>
                <td><?= str_repeat("Other 9 ", 5); ?></td>
            </tr>
            <tr>
                <td>Encrypt String</td>
                <td><?= md5($other); ?></td>
            </tr>
        </table>
    </body>
</html>
