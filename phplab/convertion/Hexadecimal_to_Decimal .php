<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hexadecimal to Decimal Converter</title>
</head>
<body>
    <form method="POST">
        <label>Enter a Hexadecimal Number:</label>
        <input type="text" name="hexadecimal">
        <input type="submit" name="convert" value="Convert to Decimal">
    </form>

    <?php 
    if (isset($_POST['convert'])) {
        $hexadecimal = strtoupper(trim($_POST['hexadecimal']));  // Get the hexadecimal number from user input and convert to uppercase
        $decimal = 0;  // Initialize the decimal result
        $length = strlen($hexadecimal);  // Get the length of the hexadecimal string

        // Define characters for hexadecimal digits
        $hexChars = '0123456789ABCDEF';

        // Convert hexadecimal to decimal
        for ($i = 0; $i < $length; $i++) {
            $char = $hexadecimal[$i];  // Get the current hex character
            $value = strpos($hexChars, $char);  // Find the position of the character in the hexChars string
            $decimal = $decimal * 16 + $value;  // Update the decimal value
        }

        echo "The decimal representation is: $decimal";
    }
    ?>
</body>
</html>
