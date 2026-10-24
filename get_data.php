<?php //get_data.php
header('Content-Type: application/json'); //json
header('Access-Control-Allow-Origin: *'); // Permite requisições de qualquer origem
$servername = "";
$username = "";
$password = "";
$dbname = "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT nome_p, loja FROM peca";
$result = $conn->query($sql);
$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
$conn->close();
echo json_encode($data); //data para js
?>