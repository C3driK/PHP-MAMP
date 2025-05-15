<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Measurement Converter</title>
    <style>
        body {
            font-family: Arial;
            margin: 40px;
            text-align: center;
        }

        input,
        select,
        button {
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>

<body>

    <h2>Measurement Converter</h2>

    <form method="post">
        <input type="number" name="value" step="any" required placeholder="Enter value">

        <select name="conversion">
            <option value="c_to_f">Celsius to Fahrenheit</option>
            <option value="c_to_k">Celsius to Kelvin</option>
            <option value="kmh_to_mps">km/h to m/s</option>
            <option value="kmh_to_knots">km/h to knots</option>
            <option value="kg_to_g">Kilogram to grams</option>
            <option value="g_to_kg">Grams to kilograms</option>
        </select>

        <button type="submit" name="convert">Convert</button>
    </form>

    <?php
    if (isset($_POST['convert'])) {
        $value = $_POST['value'];
        $type = $_POST['conversion'];
        $result = "";

        switch ($type) {
            case "c_to_f":
                $result = ($value * 9 / 5) + 32 . " °F";
                break;
            case "c_to_k":
                $result = $value + 273.15 . " K";
                break;
            case "kmh_to_mps":
                $result = $value * 1000 / 3600 . " m/s";
                break;
            case "kmh_to_knots":
                $result = $value * 0.539957 . " knots";
                break;
            case "kg_to_g":
                $result = $value * 1000 . " grams";
                break;
            case "g_to_kg":
                $result = $value / 1000 . " kilograms";
                break;
            default:
                $result = "Invalid conversion type.";
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>

</body>

</html>