<?php
include "db.php";

$acc = $_POST['accession_no'];
$title = $_POST['title'];
$authors = $_POST['authors'];
$edition = $_POST['edition'];
$publisher = $_POST['publisher'];

$sql = "INSERT INTO books
VALUES ('$acc', '$title', '$authors',
'$edition', '$publisher')";

if (mysqli_query($conn, $sql)) {
    echo "Book details inserted successfully!";
}
else {
    echo "Error: " . mysqli_error($conn);
}

echo "<br><a href='index.php'>Add Another Book</a>";
echo "<br><a href='search.php'>Search Books</a>";

mysqli_close($conn);
?>
