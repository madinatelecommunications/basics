<?php
// Database connection details
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch employee data
$sql = "SELECT id, first_name, last_name, email FROM employees";
$result = $conn->query($sql);

// Display the data in a table
echo "<table>";
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Action</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["first_name"] . "</td>";
    echo "<td>" . $row["last_name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo '<td><button onclick="doSomething(' . $row["id"] . ')">Action</button></td>';
    echo "</tr>";
}

echo "</table>";

// Close the database connection
$conn->close();
?>

<script>
    function doSomething(employeeId) {
        // You can implement the action for the button here, e.g., open a modal, show details, or perform an action.
        alert("Button clicked for employee ID: " + employeeId);
    }
</script>
