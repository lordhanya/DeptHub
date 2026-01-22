<?php
header('Content-Type: application/json');
include '../../db/connection.php';

$raw = file_get_contents("php://input");
if (!$raw) {
    echo json_encode(["success" => false, "message" => "No raw input received"]);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    echo json_encode(["success" => false, "message" => "No attendance data received."]);
    exit;
}

$date = date('Y-m-d');

$stmt = $conn->prepare("
    INSERT INTO attendance (student_id, subject_id, date, status)
    VALUES (:student_id, :subject_id, :date, :status)
    ON DUPLICATE KEY UPDATE status = :status
");

try {
    foreach ($data as $row) {
        if (!isset($row['student_id'], $row['subject_id'], $row['status'])) {
            echo json_encode(["success" => false, "message" => "Invalid data."]);
            exit;
        }

        $stmt->execute([
            ':student_id' => $row['student_id'],
            ':subject_id' => $row['subject_id'],
            ':date' => $date,
            ':status' => $row['status']
        ]);
    }
    echo json_encode(["success" => true, "message" => "Attendance saved successfully!"]);
} catch (PDOException $e) {
    echo json_encode(["success" => false, "message" => "Database error: " . $e->getMessage()]);
}
?>