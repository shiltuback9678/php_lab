<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Hexadecimal Converter</title>
</head>
<body>
    <form method="POST">
        <label>Enter a Decimal Number:</label>
        <input type="text" name="decimal">
        <input type="submit" name="convert" value="Convert to Hexadecimal">
    </form>

    <?php 
    if (isset($_POST['convert'])) {
        $decimal = intval($_POST['decimal']);  // Get the decimal number from user input
        $hexadecimal = '';  // Initialize the hexadecimal string

        // Define characters for hexadecimal digits
        $hexChars = '0123456789ABCDEF';

        // Convert decimal to hexadecimal
        if ($decimal == 0) {
            $hexadecimal = '0';  // Special case for zero
        } else {
            while ($decimal > 0) {
                $remainder = $decimal % 16;  // Get remainder when divided by 16
                $hexadecimal = $hexChars[$remainder] . $hexadecimal;  // Map remainder to hex digit and prepend
                $decimal = (int)($decimal / 16);  // Update decimal value
            }
        }

        echo "The hexadecimal representation is: $hexadecimal";
    }
    ?>
</body>
</html>
