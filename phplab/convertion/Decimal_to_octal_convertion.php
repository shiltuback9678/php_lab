<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Octal Converter</title>
</head>
<body>
    <form method="POST">
        <label>Enter a Decimal Number:</label>
        <input type="text" name="decimal">
        <input type="submit" name="convert" value="Convert to Octal">
    </form>

    <?php 
    if (isset($_POST['convert'])) {
        $decimal = intval($_POST['decimal']);  // Get the decimal number from user input
        $octal = '';  // Initialize the octal string

        // Convert decimal to octal
        if ($decimal == 0) {
            $octal = '0';  // Special case for zero
        } else {
            while ($decimal > 0) {
                $remainder = $decimal % 8;  // Get remainder when divided by 8
                $octal = $remainder . $octal;  // Prepend remainder to octal string
                $decimal = (int)($decimal / 8);  // Update decimal value
            }
        }

        echo "The octal representation is: $octal";
    }
    ?>
</body>
</html>
