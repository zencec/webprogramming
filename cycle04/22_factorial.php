<!DOCTYPE html>
<html>
<body>

<h2>Factorial Finder</h2>

<form method="post">
    <label>Enter the Number:</label> 
    <input type="number" name="num" min="0" required> 
    <input type="submit" name="submit" value="Calculate Factorial">
</form> 

<?php
if (isset($_POST['submit'])) { 
    $num = (int)$_POST['num'];
    $f = 1;

    for ($i = 1; $i <= $num; $i++) {
        $f = $f * $i;
    }

    echo "Factorial of $num is $f";
}
?>

</body>
</html>
