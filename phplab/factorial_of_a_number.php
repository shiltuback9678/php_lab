<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Enter the Number</td>
                <td><input type="text" name="num" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="result" value="Submit"></td>
            </tr>
        </table>
    </form>

    <?php 

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    if (isset($_POST['result'])) {
        $num = intval($_POST['num']);  
        $result = 1;

        for ($i = $num; $i > 1; $i--) {
            $result *= $i;  
        }

        echo "The factorial of $num is $result";
    }
    ?>
</body>
</html>
