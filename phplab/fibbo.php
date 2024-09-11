<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Fibonacci Series</title>
</head>
<body>
    <h2>Print Fibonacci Series</h2>

    <!-- Form to take user input -->
    <form method="post" action="">
        <table>
            <tr>
                <td>Enter Number:</td>
                <td><input type="text" name="range" /></td>
                <td><input type="submit" name="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>

    <?php
	
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	
    if (isset($_POST['submit'])) {
        $n = intval($_POST['range']);
        
        if ($n < 2) {
            echo "Please enter a number greater than 1.</p>";
        } else {
            $a = 0;
            $b = 1;
            echo "<h3>Fibonacci Series is:</h3> $a, $b";
            
            for ($i = 2; $i < $n; $i++) {
                $c = $a + $b;
                echo ", $c";
                $a = $b;
                $b = $c;
            }
        }
    }
    ?>

</body>
</html>
