<?php

include 'DBConnect.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');


$objectDB = new DbConnect;
$conn = $objectDB->connect();

$user = file_get_contents('php://input');
$method = $_SERVER['REQUEST_METHOD'];
// echo $method;
switch ($method) {
    case "POST":
        $user = json_decode(file_get_contents('php://input'));
        $sql = "INSERT INTO users(id, name, email, mobile, created_at, updated_at) VALUES(null, :name, :email,
        :mobile, :created_at, :updated_at)";
        $stmt = $conn->prepare($sql);
        $created_at = date('Y-m-d');
        $updated_at = date('Y-m-d');
        $stmt->bindParam(':name', $user->name);
        $stmt->bindParam(':email', $user->email);
        $stmt->bindParam(':mobile', $user->mobile);
        $stmt->bindParam(':created_at', $created_at);
        $stmt->bindParam(':updated_at', $updated_at);

        $stmt->execute();

        break;

    case "GET":
        $sql = "SELECT * FROM users";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($users);
        break;

    case "DELETE":
        $user = json_decode(file_get_contents('php://input'));
        $sql = "DELETE FROM users where id= :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $user->id);

        $stmt->execute();
        break;


    case "PUT":


        $user = json_decode(file_get_contents('php://input'));

        $command = [];
        $para = [];
        if (isset($user->name)) {
            $command[] = 'name=:name';
            $para[':name'] = $user->name;
        }
        if (isset($user->email)) {
            $command[] = 'email=:email';
            $para[':email'] = $user->email;
        }
        if (isset($user->mobile)) {
            $command[] = 'mobile=:mobile';
            $para[':mobile'] = $user->mobile;
        }
        if (!empty($command)) {

            $sql = "UPDATE users SET " . join(', ', $command) . " WHERE id= :id";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $user->id);
            foreach ($para as $key => $value) {

                $stmt->bindValue($key, $value);
            }
            $stmt->execute();
        }

        break;
}
