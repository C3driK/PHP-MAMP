<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 50px;
        }

        input,
        select {
            margin: 5px;
            padding: 8px;
        }
    </style>
</head>

<body>
    <h2>Simple PHP Calculator</h2>

    <form method="post">
        <input type="number" name="num1" step="any" required placeholder="First number">

        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>

        <input type="number" name="num2" step="any" required placeholder="Second number">
        <br>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = 0;

        switch ($operator) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 == 0) {
                    echo "<p style='color:red;'>Cannot divide by zero.</p>";
                    exit;
                }
                $result = $num1 / $num2;
                break;
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>

</html>