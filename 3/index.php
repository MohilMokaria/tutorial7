<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoriaal 7 | 3</title>
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
        <h1>Car Selector</h1>
        <form method="post">
            <input class="box" type="radio" name="car" value="Swift">
            <label for="car">Maruti- Swift</label>
            <br>
            <input class="box" type="radio" name="car" value="Creta">
            <label for="car">Hyundai- Creta</label>
            <br>
            <input class="box" type="radio" name="car" value="Carens">
            <label for="car">Kia- Carens</label>
            <br>
            <input class="box" class="but" type="submit" value="Submit">
        </form>
        <?php
            if(isset($_POST['car'])){
                $selected = $_POST['car'];
                switch($selected){
                    case "Swift": $price="7 Lakhs";
                            break;
                    case "Creta": $price="13 Lakhs";
                            break;
                    case "Carens": $price="15 Lakhs";
                }
                echo "<script type='text/javascript'>alert(\"Price for Brand New $selected : $price\");</script>";
            }
        ?>
    </center>
</body>
</html>