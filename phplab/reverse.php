<!-- Reverse Number-->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Reverse Number</title>
</head>

<body>
    <?php
	
echo "<pre>";
	print_r($_POST);
	echo "</pre>";
    if (isset($_POST['submit'])) {
        $num = intval($_POST['num']); 
        $originalNum = $num; 
        $reversedNum = 0;

      
        while ($num > 0) {
            $lastDigit = $num % 10;
            $reversedNum = $reversedNum * 10 + $lastDigit;
            $num = intval($num / 10); 
        }
        
       
        echo "<p>Original number: " . $originalNum . "</p>";
        echo "<p>Reversed number: " . $reversedNum . "</p>";
    }
    ?>

    <form name="frm" action="" method="post">
        <table>
            <tr>
                <td>Enter a number:</td>
                <td><input type="text" name="num" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Reverse" /></td>
            </tr>
        </table>
    </form>

</body>
</html>