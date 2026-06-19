<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type:application/json");

include_once('../config/Database.php');
include_once('../model/Data.php');

$database = new Database();
$db = $database->connect();

$data = new Data($db);
$result = $data->read();
$num = $result->rowCount();
if ($num > 0) {
    $student_arr = [];
    $student_arr["data"] = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $tummy_student = [
            "id" => $row['id'],
            "name" => $row['name'],
            "age" => $row['age'],
            "course" => $row['course'],
        ];
        array_push($student_arr["data"], $tummy_student);
    }
    echo json_encode($student_arr);
} else {
    echo json_encode(
        array("Message" => "No Record Found")
    );
}
