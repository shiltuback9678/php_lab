<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Octal to Hexadecimal Converter</title>
</head>
<body>
    <form method="POST">
        <label>Enter an Octal Number:</label>
        <input type="text" name="octal">
        <input type="submit" name="convert" value="Convert to Hexadecimal">
    </form>

    <?php 
    if (isset($_POST['convert'])) {
        $octal = $_POST['octal'];  // Get the octal number from user input
        $decimal = 0;  // Initialize the decimal result
        $length = strlen($octal);  // Length of octal string

        // Convert octal to decimal
        for ($i = 0; $i < $length; $i++) {
            $digit = $octal[$length - $i - 1];  // Get each octal digit (right to left)
            $decimal += $digit * pow(8, $i);  // Update decimal value
        }

        // Convert decimal to hexadecimal
        $hexadecimal = '';
        if ($decimal == 0) {
            $hexadecimal = '0';  // Special case for zero
        } else {
            $hexChars = '0123456789ABCDEF';  // Hexadecimal digits
            while ($decimal > 0) {
                $remainder = $decimal % 16;  // Get remainder when divided by 16
                $hexadecimal = $hexChars[$remainder] . $hexadecimal;  // Map remainder to hex digit
                $decimal = (int)($decimal / 16);  // Update decimal value
            }
        }

        echo "The hexadecimal representation is: $hexadecimal";
    }
    ?>
</body>
</html>
