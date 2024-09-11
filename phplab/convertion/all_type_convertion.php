<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number System Converter</title>
</head>
<body>
    <form method="POST">
        <label>Enter a Decimal Number:</label>
        <input type="text" name="decimal">
        <input type="submit" name="convert_decimal" value="Convert Decimal">
        <br><br>
        <label>Enter a Binary Number:</label>
        <input type="text" name="binary">
        <input type="submit" name="convert_binary" value="Convert Binary">
        <br><br>
        <label>Enter an Octal Number:</label>
        <input type="text" name="octal">
        <input type="submit" name="convert_octal" value="Convert Octal">
        <br><br>
        <label>Enter a Hexadecimal Number:</label>
        <input type="text" name="hexadecimal">
        <input type="submit" name="convert_hexadecimal" value="Convert Hexadecimal">
    </form>

    <?php 
    if (isset($_POST['convert_decimal'])) {
        $decimal = intval($_POST['decimal']); 

        // Decimal to Binary
        $binary = '';
        if ($decimal == 0) {
            $binary = '0';
        } else {
            while ($decimal > 0) {
                $binary = ($decimal % 2) . $binary;
                $decimal = (int)($decimal / 2);
            }
        }

        // Decimal to Octal
        $decimal = intval($_POST['decimal']);
        $octal = '';
        if ($decimal == 0) {
            $octal = '0';
        } else {
            while ($decimal > 0) {
                $octal = ($decimal % 8) . $octal;
                $decimal = (int)($decimal / 8);
            }
        }

        // Decimal to Hexadecimal
        $decimal = intval($_POST['decimal']);
        $hexChars = '0123456789ABCDEF';
        $hexadecimal = '';
        if ($decimal == 0) {
            $hexadecimal = '0';
        } else {
            while ($decimal > 0) {
                $remainder = $decimal % 16;
                $hexadecimal = $hexChars[$remainder] . $hexadecimal;
                $decimal = (int)($decimal / 16);
            }
        }

        echo "<p>Decimal: {$_POST['decimal']}</p>";
        echo "<p>Binary: $binary</p>";
        echo "<p>Octal: $octal</p>";
        echo "<p>Hexadecimal: $hexadecimal</p>";
    }

    if (isset($_POST['convert_binary'])) {
        $binary = strtoupper(trim($_POST['binary'])); 
        $decimal = 0; 
        $length = strlen($binary); 

        for ($i = 0; $i < $length; $i++) {
            $bit = $binary[$length - $i - 1]; 
            if ($bit == '1') {
                $decimal += pow(2, $i); 
            }
        }

        // Binary to Octal
        $octal = '';
        $tempDecimal = $decimal; 
        if ($tempDecimal == 0) {
            $octal = '0';
        } else {
            while ($tempDecimal > 0) {
                $octal = ($tempDecimal % 8) . $octal;
                $tempDecimal = (int)($tempDecimal / 8);
            }
        }

        // Binary to Hexadecimal
        $hexChars = '0123456789ABCDEF';
        $hexadecimal = '';
        if ($decimal == 0) {
            $hexadecimal = '0';
        } else {
            while ($decimal > 0) {
                $remainder = $decimal % 16;
                $hexadecimal = $hexChars[$remainder] . $hexadecimal;
                $decimal = (int)($decimal / 16);
            }
        }

        echo "<p>Binary: {$_POST['binary']}</p>";
        echo "<p>Decimal: $decimal</p>";
        echo "<p>Octal: $octal</p>";
        echo "<p>Hexadecimal: $hexadecimal</p>";
    }

    if (isset($_POST['convert_octal'])) {
        $octal = strtoupper(trim($_POST['octal'])); 
        $decimal = 0; 
        $length = strlen($octal); 

        for ($i = 0; $i < $length; $i++) {
            $digit = $octal[$length - $i - 1]; 
            $decimal += $digit * pow(8, $i); 
        }

        // Octal to Binary
        $binary = '';
        if ($decimal == 0) {
            $binary = '0';
        } else {
            while ($decimal > 0) {
                $binary = ($decimal % 2) . $binary;
                $decimal = (int)($decimal / 2);
            }
        }

        // Octal to Hexadecimal
        $hexChars = '0123456789ABCDEF';
        $hexadecimal = '';
        $tempDecimal = intval($_POST['octal'], 8); 
        if ($tempDecimal == 0) {
            $hexadecimal = '0';
        } else {
            while ($tempDecimal > 0) {
                $remainder = $tempDecimal % 16;
                $hexadecimal = $hexChars[$remainder] . $hexadecimal;
                $tempDecimal = (int)($tempDecimal / 16);
            }
        }

        echo "<p>Octal: {$_POST['octal']}</p>";
        echo "<p>Decimal: $decimal</p>";
        echo "<p>Binary: $binary</p>";
        echo "<p>Hexadecimal: $hexadecimal</p>";
    }

    if (isset($_POST['convert_hexadecimal'])) {
        $hexadecimal = strtoupper(trim($_POST['hexadecimal'])); 
        $decimal = 0; 
        $hexChars = '0123456789ABCDEF'; 
        $length = strlen($hexadecimal); 

        for ($i = 0; $i < $length; $i++) {
            $char = $hexadecimal[$length - $i - 1]; 
            $value = strpos($hexChars, $char); 
            $decimal += $value * pow(16, $i); 
        }

        // Hexadecimal to Binary
        $binary = '';
        if ($decimal == 0) {
            $binary = '0';
        } else {
            while ($decimal > 0) {
                $binary = ($decimal % 2) . $binary;
                $decimal = (int)($decimal / 2);
            }
        }

        // Hexadecimal to Octal
        $octal = '';
        $tempDecimal = intval($_POST['hexadecimal'], 16); 
        if ($tempDecimal == 0) {
            $octal = '0';
        } else {
            while ($tempDecimal > 0) {
                $octal = ($tempDecimal % 8) . $octal;
                $tempDecimal = (int)($tempDecimal / 8);
            }
        }

        echo "<p>Hexadecimal: {$_POST['hexadecimal']}</p>";
        echo "<p>Decimal: $decimal</p>";
        echo "<p>Binary: $binary</p>";
        echo "<p>Octal: $octal</p>";
    }
    ?>
</body>
</html>
