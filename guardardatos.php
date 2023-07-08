<?php
// Check if the form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data by using the $_POST global variable
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    // Create a connection to the MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inventario";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO productos (nombre, categoria, cantidad, precio) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $categoria, $cantidad, $precio);

    // Execute the SQL statement
    if ($stmt->execute() === TRUE) {
        // Display a success message
        echo '<script>alert("¡Gracias! Su solicitud ha sido procesada exitosamente.");</script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();



    // Redirect to the homepage
    header("Location: ./index.php");
    exit();
}
?>
