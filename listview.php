<?php
include 'connection.php';

$result = mysqli_query($conn, "SELECT * FROM login;");

echo "<table border='1'>

<tr>

<th>name</th>

<th>roll number</th>

</tr>";



while ($row = mysqli_fetch_array($result)) {

    echo "<tr>";

    echo "<td>" . $row['username'] . "</td>";

    echo "<td>" . $row['rollnumber'] . "</td>";


    echo "</tr>";
}

echo "</table>";



mysqli_close($conn);