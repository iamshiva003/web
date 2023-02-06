<!-- Write a PHP program to find the length of the string and count the words in the string -->
<html>
    <head>
        <title>Program 20</title>
    </head>
    <body>
        <h1>Length of a string</h1>

        <form method="POST">
            <h1>Enter the String: <input type="text" name="string"></h1>
            <input type="submit" name="submit1" value="Check Length">
        </form>

        <?php
            if(isset($_POST["submit1"])) {
                $str = $_POST["string"];

                echo "<h3>";
                echo "The given string is: $str";
                echo "<br>Length of the string: ".strlen($str);
                echo "<br>No.of words in the string: ".str_word_count($str);
                echo "</h3>";
            }
        ?>
    </body>
</html>