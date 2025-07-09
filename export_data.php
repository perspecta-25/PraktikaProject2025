<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$host = 'localhost';
$dbname = 'teast_base';
$user = 'root';
$pass = '';

try {
    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    // Fetch all contacts
    $query = "SELECT * FROM contacts ORDER BY id DESC";
    $result = $conn->query($query);

    $contacts = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $contacts[] = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'email' => $row['email'],
                'message' => $row['message'],
                'created_at' => $row['created_at'] ?? date('Y-m-d H:i:s')
            );
        }
    }

    $conn->close();

    // Return JSON response
    echo json_encode(array(
        'success' => true,
        'data' => $contacts,
        'count' => count($contacts)
    ), JSON_PRETTY_PRINT);

} catch (Exception $e) {
    echo json_encode(array(
        'success' => false,
        'error' => $e->getMessage()
    ));
}
?>