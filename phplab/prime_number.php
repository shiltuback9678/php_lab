<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Prime Number Check</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $num = intval($_POST['num']); 

        if ($num < 2) {
            echo "<p>The number must be greater than 1 to be prime.</p>";
        } else {
           
            $isPrime = true;

            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }

            if ($isPrime) {
                echo "<p>$num is a prime number.</p>";
            } else {
                echo "<p>$num is not a prime number.</p>";
            }
        }
    }
    ?>

    <form name="frm" action="" method="post">
        <h2>Check if a Number is Prime</h2>
        <table>
            <tr>
                <td>Enter a number:</td>
                <td><input type="text" name="num" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>

</body>

</html>
