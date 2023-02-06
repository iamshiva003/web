<!-- Write a simple calculator program in PHP using switch case -->
<html>
    <head>
        <title>Program 18</title>
    </head>
    <body>
        <h2>Calculator using PHP switch case</h2>

        <form method="POST" enctype="multipart/form">
            Enter the First number: <input type="text" name="a"> <br>
            Enter the Second number: <input type="text" name="b"> <br>

            <input type="radio" name="arithmetic" value="add">Addition
            <input type="radio" name="arithmetic" value="sub">Subtraction
            <input type="radio" name="arithmetic" value="mult">Multiplication
            <input type="radio" name="arithmetic" value="div">Division
            <br><br>
            <input type="submit" name="submit1" value="Calculate"> <br><br>
        </form>

        <?php
            if(isset($_POST["submit1"])) {
                $a = $_POST["a"];
                $b = $_POST["b"];
                $arithmetic = $_POST["arithmetic"];

                switch($arithmetic) {
                    case "add": echo "Addition: ".($a + $b); 
                                break;
                    case "sub": echo "Subtraction: ".($a - $b); 
                                break;
                    case "mult": echo "Multiplication: ".($a * $b); 
                                break;
                    case "div": echo "Division: ".($a / $b); 
                                break;
                }
            }
        ?>
    </body>
</html>