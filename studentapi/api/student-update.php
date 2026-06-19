<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type:application/json");
header("Access-Control-Allow-Method:PUT");
header("Access-Control-Allow-Header:Content-Type,Authorization,X-Requested_with");
//Required files
include_once("../config/Database.php");
include_once("../model/Data.php");

$database = new Database();
$db = $database->connect();
$data = new Data($db);

$student = json_decode(file_get_contents("php://input"));
if (isset($student->id) && ($student->id)) {
    $data->id = $student->id;
    $data->name = $student->name;
    $data->age = $student->age;
    $data->course = $student->course;

    if ($data->update()) {
        echo json_encode(
            array("Message" => "Student Updated Successfully")
        );
    } else {
        echo json_encode(
            array("Message" => "Something Went Wrong")
        );
    }
} else {
    echo json_encode(
        array("Message" => "Please set the ID")
    );
}
