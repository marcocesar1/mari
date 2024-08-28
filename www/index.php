<?php
// Conexión a la base de datos
$servername = "mari_db";
$username = "root";
$password = "rootpassword";
$dbname = "exampledb";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Ejemplo de consulta (ajusta según tu base de datos)
$sql = "SELECT * FROM tu_tabla";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Imprimir resultados
    while($row = $result->fetch_assoc()) {
        echo "<br> id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["age"];
    }
} else {
    echo "0 results";
}

$conn->close();