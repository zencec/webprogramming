<html>
<head>
    <title>Search Books</title>
</head>
<body>

<h2>Search Book by Title</h2>

<form method="POST" action="search.php">

Enter Book Title:
<input type="text" name="title" required>

<input type="submit" name="search" value="Search">

</form>

<?php

if (isset($_POST['search'])) {

    include "db.php";

    $title = $_POST['title'];

    $sql = "SELECT * FROM books
            WHERE title LIKE ?";

    $stmt = mysqli_prepare($conn, $sql);

    $search = "%" . $title . "%";

    mysqli_stmt_bind_param($stmt, "s", $search);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {

        echo "<h2>Book Search Results</h2>";

        echo "<table border='1' cellpadding='10'>";

        echo "<tr>
        <th>Accession Number</th>
        <th>Title</th>
        <th>Authors</th>
        <th>Edition</th>
        <th>Publisher</th>
        </tr>";

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";

            echo "<td>".$row['accession_no']."</td>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['authors']."</td>";
            echo "<td>".$row['edition']."</td>";
            echo "<td>".$row['publisher']."</td>";

            echo "</tr>";
        }

        echo "</table>";

    }
    else {
        echo "<h3>No books found!</h3>";
    }

    mysqli_close($conn);
}

?>

<br><br>
<a href="index.php">Back to Book Entry</a>

</body>
</html>
