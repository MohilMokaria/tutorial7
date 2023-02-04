<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoriaal 7 | 1</title>
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
        <h1>Grades Calculator</h1>
        <form method="post">
            <label for="subject1">Subject 1 Marks :</label>
            <input class="box" type="number" name="subject1" id="subject1" required>
            <br>
            <label for="subject2">Subject 2 Marks :</label>
            <input class="box" type="number" name="subject2" id="subject2" required>
            <br>
            <label for="subject3">Subject 3 Marks :</label>
            <input class="box" type="number" name="subject3" id="subject3" required>
            <br>
            <label for="subject4">Subject 4 Marks :</label>
            <input class="box" type="number" name="subject4" id="subject4" required>
            <br>
            <label for="subject5">Subject 5 Marks :</label>
            <input class="box" type="number" name="subject5" id="subject5" required>
            <br>
            <input class="but" type="submit" value="Submit">
        </form>
        <br>
        <?php
            if($_POST){
                $a = $_POST["subject1"];
                $b = $_POST["subject2"];
                $c = $_POST["subject3"];
                $d = $_POST["subject4"];
                $e = $_POST["subject5"];

                $avg = ($a+$b+$c+$d+$e)/5;

                switch(true){
                    case($avg >= 90): $grade = "A";
                            break;
                    case($avg >= 80): $grade = "B";
                            break;
                    case($avg >= 70): $grade = "C";
                            break;
                    case($avg >= 60): $grade = "D";
                            break;
                    case($avg >= 50): $grade = "E";
                            break;
                    default: $grade = "F";
                }

                echo "<script type='text/javascript'>alert(\"The average score is $avg and the grade is $grade\");</script>";
            }
        ?>
    </center>
</body>
</html>