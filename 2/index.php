<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoriaal 7 | 2</title>
    <style>
        label{
            font-size: 2rem;
            margin: 40px;
        }
        .box{
            padding: 10px;
            margin: 40px;
        }
        .but{
            font-size: 1rem;
            padding: 5px 20px;
        }
    </style>
</head>
<body>
    <center>
        <h1>Max Finder</h1>
        <form method="post">
            <label for="subject1">First Number :</label>
            <input class="box" type="number" name="one" id="one" required>
            <br>
            <label for="subject2">Second Number :</label>
            <input class="box" type="number" name="two" id="two" required>
            <br>
            <label for="subject3">Third Number :</label>
            <input class="box" type="number" name="three" id="three" required>
            <br>
            <input class="but" type="submit" value="Submit">
        </form>
        <?php
            if($_POST){
                $a = $_POST["one"];
                $b = $_POST["two"];
                $c = $_POST["three"];

                if($a>$b && $a>$c){
                    $max = $a;
                }else if($b>$a && $b>$c){
                    $max = $b;
                }else{
                    $max = $c;
                }
                echo "<script type='text/javascript'>alert(\"Maximum =  $max\");</script>";
            }
        ?>
    </center>
</body>
</html>