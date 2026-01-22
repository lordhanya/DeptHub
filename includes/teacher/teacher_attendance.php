<?php
include '../../db/connection.php';
include '../includes/header.php';
include '../includes/dashboard_header.php';
include 'teacher_sidebar.php';

$subject_id = $_GET['subject_id'] ?? 1;

$sql = "
    SELECT u.id AS user_id, u.name, s.roll_number, s.semester
    FROM users u
    INNER JOIN student_details s ON u.id = s.user_id
    ORDER BY s.roll_number ASC
";
$stmt = $conn->prepare($sql);
$stmt->execute();
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
    <div id="main-content">
        <div class="attendance-teacher-container my-5">
            <h2 class="text-center text-white mb-4">Mark Attendance</h2>
            <p class="text-center text-white">Select Present or Absent for each student</p>
            <form id="attendanceForm">
                <input type="hidden" name="subject_id" id="subject_id" value="<?= htmlspecialchars($subject_id); ?>">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>Roll No</th>
                                <th>Student Name</th>
                                <th>Semester</th>
                                <th>Actions</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($students) > 0): ?>
                                <?php foreach ($students as $student): ?>
                                    <tr class="attendance-row"
                                        data-student-id="<?= $student['user_id']; ?>">
                                        <td><?= htmlspecialchars($student['roll_number']); ?></td>
                                        <td><?= htmlspecialchars($student['name']); ?></td>
                                        <td><?= htmlspecialchars($student['semester']); ?></td>
                                        <td>
                                            <label>
                                                <input type="radio" name="status_<?= $student['user_id']; ?>" value="present"> Present
                                            </label>
                                            <label>
                                                <input type="radio" name="status_<?= $student['user_id']; ?>" value="absent"> Absent
                                            </label>
                                        </td>
                                        <td>
                                            <span id="status-<?= $student['user_id']; ?>" class="badge bg-secondary">Not Marked</span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5">No students found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="text-center mt-4">
                    <button type="button" class="btn btn-primary" id="saveAttendanceBtn">
                        <i class="bx bx-save"></i> Save Attendance
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include '../includes/footer.php'; ?>