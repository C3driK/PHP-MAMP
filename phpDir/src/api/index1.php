<!-- <?php
include './DBConnect.php';

// Set CORS headers for API access
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

// Connect to database
$objectDB = new DbConnect;
$conn = $objectDB->connect();

// Detect the HTTP method
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "POST":
        // Get and decode the JSON data sent from client
        $user = json_decode(file_get_contents('php://input'));

        // Prepare SQL insert statement
        $sql = "INSERT INTO users (id, name, email, mobile, created_at, updated_at)
                VALUES (NULL, :name, :email, :mobile, :created_at, :updated_at)";
        $stmt = $conn->prepare($sql);

        // Set timestamps
        $created_at = date('Y-m-d');
        $updated_at = date('Y-m-d');

        // Bind parameters
        $stmt->bindParam(':name', $user->name);
        $stmt->bindParam(':email', $user->email);
        $stmt->bindParam(':mobile', $user->mobile);
        $stmt->bindParam(':created_at', $created_at);
        $stmt->bindParam(':updated_at', $updated_at);

        // Execute and respond
        if ($stmt->execute()) {
            $response = ['status' => 1, 'message' => 'Record created successfully'];
        } else {
            $response = ['status' => 0, 'message' => 'Failed to create record'];
        }

        echo json_encode($response);
        break;

    case "GET":
        $sql = "SELECT * FROM users";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($users);
        break;

    case "PUT":
        $user = json_decode(file_get_contents('php://input'));
        $sql = "UPDATE users SET name = :name, email = :email, mobile = :mobile, updated_at = :updated_at WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $updated_at = date('Y-m-d');
    
        $stmt->bindParam(':name', $user->name);
        $stmt->bindParam(':email', $user->email);
        $stmt->bindParam(':mobile', $user->mobile);
        $stmt->bindParam(':updated_at', $updated_at);
        $stmt->bindParam(':id', $user->id);
    
        if ($stmt->execute()) {
            $response = ['status' => 1, 'message' => 'Record updated successfully'];
        } else {
            $response = ['status' => 0, 'message' => 'Failed to update record'];
        }
        echo json_encode($response);
        break;
        



    case "DELETE":
        $user = json_decode(file_get_contents('php://input'));
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $user->id);

        if ($stmt->execute()) {
            $response = ['status' => 1, 'message' => 'Record deleted successfully'];
        } else {
            $response = ['status' => 0, 'message' => 'Failed to delete record'];
        }
        echo json_encode($response);
        break;
} ?> -->