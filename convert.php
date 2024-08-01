<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    $temp = $_POST['unit'];
    $result = '';

    if ($temp == "celsius") {
        $fahrenheit = $num * 9 / 5 + 32;
        $kelvin = $num + 273.15;
        $result = "Celsius to Fahrenheit: " . $fahrenheit . " | Celsius to Kelvin: " . $kelvin;
    } elseif ($temp == "kelvin") {
        $celsius = $num - 273.15;
        $fahrenheit = ($num - 273.15) * 9 / 5 + 32;
        $result = "Kelvin to Celsius: " . $celsius . " | Kelvin to Fahrenheit: " . $fahrenheit;
    } elseif ($temp == "fahrenheit") {
        $celsius = ($num - 32) * 5 / 9;
        $kelvin = ($num - 32) * 5 / 9 + 273.15;
        $result = "Fahrenheit to Celsius: " . $celsius . " | Fahrenheit to Kelvin: " . $kelvin;
    } else {
        $result = "Please choose a unit.";
    }

    // Redirect back to index.php with the result in query string
    echo "<script>
        window.location.href = 'index.php?result=" . urlencode($result) . "';
    </script>";
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
