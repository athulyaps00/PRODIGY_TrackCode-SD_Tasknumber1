<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Temperature Converter</h1>
        <div class="container">
            <div class="main-div">
                <div class="left-side">
                    <img src="temperature.jpg" alt="Temperature Image">
                </div>
                <div class="right-side">
                    <form action="convert.php" method="post">
                        <input type="text" name="num" placeholder="Enter number" class="input1" required>
                        <div class="selection">
                            <label>Kelvin</label>
                            <input type="radio" name="unit" value="kelvin" required>
                            <label>Celsius</label>
                            <input type="radio" name="unit" value="celsius" required>
                            <label>Fahrenheit</label>
                            <input type="radio" name="unit" value="fahrenheit" required>
                        </div>
                        <input type="submit" name="submit" class="btn" value="Convert Now">
                    </form>
                    <div class="result <?php if (!isset($_GET['result'])) echo 'hidden'; ?>">
                        <?php
                        if (isset($_GET['result'])) {
                            $result = htmlspecialchars($_GET['result']);
                            // Assuming the result has different units separated by commas
                            $results = explode(',', $result);
                            foreach ($results as $line) {
                                echo "<p>$line</p>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
