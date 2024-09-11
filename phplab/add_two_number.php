
	
	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add_two_number</title>
</head>
<body>

<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

if(isset($_POST["submit"]))
{
    $numb1 = intval($_POST["num1"]);
    $numb2 = intval($_POST["num2"]);

    $sum = $numb1 + $numb2;

    echo "Sum: " . $sum;
}
    
?>

    <form method="POST" action="">
        <table>
            <tr>
                <td>Enter the Number:</td>
                <td><input type="text" name="num1" value=""></td>
            </tr>
            <tr>
                <td>Enter the Number:</td>
                <td><input type="text" name="num2" value=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

</body>
</html>


