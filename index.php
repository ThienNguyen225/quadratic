<?php
include "quadraticEquation.php";
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $coefficientA = $_POST["coefficientA"];
    $coefficientB = $_POST["coefficientB"];
    $coefficientC = $_POST["coefficientC"];
    $quadraticEquation = new QuadraticEquation($coefficientA, $coefficientB, $coefficientC);
    if (!empty($coefficientA) || !empty($coefficientB) || !empty($coefficientC)) {
        if ($quadraticEquation->getDiscriminant() === 0) {
            echo "root = " . $quadraticEquation->getDoubleExperience();
        } elseif ($quadraticEquation->getDiscriminant() > 0) {
            echo "root1 =" . $quadraticEquation->getRoot1() . "<br>root2 =" . $quadraticEquation->getRoot2();
        } else {
            echo "the equation has no solution";
        }
    } else {
        echo "pls input";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Xây dựng lớp QuadraticEquation (Phương trình bậc hai)</title>
    <style>
        form {
            margin-left: 35%;
        }

        h2 {
            color: blue;
            margin-left: 30%;
        }

        .display {
            width: 280px;
            height: 160px;
            margin: 0;
            padding: 10px;
            border: 1px #dd33dd solid;
        }

        input[type=submit] {
            color: red;
            margin-left: 60px;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="display">
        <h2>Quadratic</h2>
        <fieldset>
            Coefficient a:
            <input type="number" name="coefficientA" size="30">
            <br>Coefficient b:
            <input type="number" name="coefficientB" size="30">
            <br>Coefficient c:
            <input type="number" name="coefficientC" size="30">
            <br>Display:
            <input type="submit" value="result">
        </fieldset>
    </div>
</form>
</body>
</html>