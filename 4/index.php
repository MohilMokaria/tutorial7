<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoriaal 7 | 4</title>
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
        <h1>Bill Calculator</h1>
        <form method="post">
            <label for="subject1">Units Consumed :</label>
            <input class="box" type="number" name="unit" id="unit" required>
            <br>
            <input class="but" type="submit" value="Submit">
        </form>
        <?php
        // For first 50 units – Rs. 3.50/unit
        // For next 100 units – Rs. 4.00/unit
        // For next 100 units – Rs. 5.20/unit
        // For units above 250 – Rs. 6.50/unit
            if($_POST){
                $u = $_POST["unit"];
                $total = 0;
                $temp = $u;

                if($u<=50){
                    $total += $u*3.50;
                }else if($u<= 150){
                    $total += 50*3.50;
                    $u -= 50;
                    $total += $u*4;
                }else if($u<= 250){
                    $total += 50*3.50;
                    $total += 100*4;
                    $u -= 150;
                    $total += $u*5.20;
                }else{
                    $total += 50*3.50;
                    $total += 100*4;
                    $total += 100*5.20;
                    $u -= 250;
                    $total += $u*6.50;
                }
                echo "<script type='text/javascript'>alert(\"For Consuming $temp units, Your Bill = $total\");</script>";
            }
        ?>
    </center>
</body>
</html>