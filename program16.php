<!-- Write a program to upload and display an image using PHP -->
<html>
    <head>
        <title>Program 16</title>
    </head>
    <body>
        <form enctype="multipart/form-data" method="POST">
            Select Image
            <input type="file" name="file"> <br>
            <input type="submit" name="submit1" value="Upload"> <br>
        </form>

        <?php
            if(isset($_POST['submit1'])) {
                $filepath = "images/".$_FILES["file"]["name"];
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
                    echo "<img src=".$filepath." height=200 width=300>";
                }
                else {
                    echo "Error!";
                }
            }
        ?>
    </body>
</html>