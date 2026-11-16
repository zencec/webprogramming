<!DOCTYPE html>
<html>
<body>

<h2>Odd or Even Finder</h2>

<form method="post">
    <label>Enter the Number:</label> 
    <input type="number" name="num" required> 
    <input type="submit" name="submit" value="Calculate Odd/Even">
</form> 

<?php
if (isset($_POST['submit'])) { 
    $num = (int)$_POST['num'];

    if ($num % 2 === 0) {
        echo "<p><strong>$num</strong> is an Even number.</p>";
    } else {
        echo "<p><strong>$num</strong> is an Odd number.</p>";
    }
}
?>

</body>
</html>



