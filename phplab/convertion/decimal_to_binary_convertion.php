<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Binary Converter</title>
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <td>Enter a Decimal Number:</td>
                <td><input type="text" name="decimal"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="convert" value="Convert to Binary"></td>
            </tr>
        </table>
    </form>

    <?php 
    if (isset($_POST['convert'])) {
        $decimal = $_POST['decimal'];  
        $binary = '';  

        while ($decimal > 0) {
            $binary = ($decimal % 2) . $binary; 
            $decimal = intval($decimal / 2);  
        }

        if ($binary == '') {
            $binary = '0';  
        }

        echo "The binary representation is: $binary";
    }
    ?>
</body>
</html>
