<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 7 | 5</title>
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
            margin: 0 10px;
        }
        .res:hover{
            cursor:not-allowed;
        }
    </style>
</head>
<body>
    <center>
        <h1>Simple Calculator</h1>
            <form method="post">
                <input class="box" type="number" name="num1" required>
                <label for="num1">First Number</label>
                <br>
                <input class="box" type="number" name="num2" required>
                <label for="num2">Second Number</label>
                <br>

                <?php
                    if (isset($_POST['sub'])) {
                        $a = $_POST['num1'];
                        $b = $_POST['num2'];
                        $op = $_POST['sub'];

                        switch($op){
                            case "Addition": $data = $a+$b;
                                break;
                            case "Subtraction": $data = $a-$b;
                                break;
                            case "Division": $data = $a/$b;
                                break;
                            case "Multiplication": $data = $a*$b;
                        }

                        $_POST['data'] = $data;
                        // echo "The average score is $average and the grade is $grade";
                    }
            ?>

                <input class="box res" type="number" name="data" value="<?php echo isset($_POST['data']) ? $_POST['data'] : ''; ?>" disabled>
                <label for="num3">Result</label>
                <br>
                <input name="sub" class="but" type="submit" value="Addition">
                <input name="sub" class="but" type="submit" value="Subtraction">
                <input name="sub" class="but" type="submit" value="Division">
                <input name="sub" class="but" type="submit" value="Multiplication">
            </form>
    </center>
</body>
</html>