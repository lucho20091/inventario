<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventario";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    $sql = "UPDATE productos SET nombre='$nombre', categoria='$categoria', cantidad='$cantidad', precio='$precio' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error al actualizar registro: " . $conn->error;
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM productos WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error al eliminar registro: " . $conn->error;
    }
}

$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='d-flex'>";
    echo "<div class='primero'>";
    echo "<table class='tabla'>";
    echo "<tr><th>Id</th><th>Nombre</th><th>Categoria</th><th>Cantidad</th><th>Precio</th><th>Acciones</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><form action='' method='post'><td>" . $row["id"] . "</td>
        <td><input type='text' id='nombr' name='nombre' value='" . $row["nombre"] . "'></td>
        <td><input type='text' id='categori' name='categoria' value='" . $row["categoria"] . "'></td>
        <td><input type='number' id='cantida' name='cantidad' value='" . $row["cantidad"] . "'></td>
        <td><input type='number' id='preci' name='precio' value='" . $row["precio"] . "'></td>
        <td>
        <input type='hidden' name='id' value='" . $row["id"] . "'>
        <input type='submit' name='update' value='Actualizar' class='update-btn' onclick='return confirmActualizar();'>
        <input type='submit' name='delete' id='elimina' value='Eliminar' class='delete-btn' onclick='return confirmDelete();'>
        </td></form></tr>";
    }
    echo "</table></div></div>";
} else {
    echo "No hay productos registrados";
}

$conn->close();
?>
