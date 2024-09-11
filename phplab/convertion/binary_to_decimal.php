<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary to Decimal Converter</title>
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <td>Enter a Binary Number:</td>
                <td><input type="text" name="binary"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="convert" value="Convert to Decimal"></td>
            </tr>
        </table>
    </form>

    <?php 
    if (isset($_POST['convert'])) {
        $binary = $_POST['binary'];  
        $decimal = 0; 

        for ($i = 0; $i < strlen($binary); $i++) {
            $decimal = $decimal * 2 + $binary[$i];  
        }

        echo "The decimal representation is: $decimal";
    }
    ?>
</body>
</html>
