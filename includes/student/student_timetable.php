<?php
include '../../db/connection.php';
include '../includes/header.php';
include '../includes/dashboard_header.php';
include 'student_sidebar.php';

try {
    $stmt = $conn->query("SELECT * FROM timetable");
    $timetableData = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database query failed: " . $e->getMessage());
}
?>

<main>
    <!-- Main container -->
    <div class="timetable-container" id="main-content">
        <div class="page-header">
            <h1 class="page-title">Class Timetable</h1>
            <p class="page-subtitle">Weekly Schedule Overview</p>
        </div>

        <?php if (count($timetableData) > 0): ?>
            <div class="timetable-wrapper">
                <div class="table-container">
                    <table class="table timetable table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sl. No.</th>
                                <th>Day</th>
                                <th>9:00 - 10:00</th>
                                <th>10:00 - 11:00</th>
                                <th>11:00 - 12:00</th>
                                <th>12:00 - 13:00</th>
                                <th>13:00 - 14:00</th>
                                <th>14:00 - 15:00</th>
                                <th>15:00 - 16:00</th>
                                <th>16:00 - 17:00</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($timetableData as $row): ?>
                                <tr>
                                    <?php
                                    foreach ($row as $cell):
                                        $cellClass = '';
                                        if (
                                            stripos($cell, 'lunch') !== false ||
                                            stripos($cell, 'break') !== false ||
                                            stripos($cell, 'recess') !== false
                                        ) {
                                            $cellClass = 'break-cell';
                                        }
                                    ?>
                                        <td class="<?php echo $cellClass; ?> p-3">
                                            <?php echo htmlspecialchars($cell); ?>
                                        </td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="action-buttons">
                <button class="btn-custom print-btn" onclick="window.print()">
                    <i class='bx bx-printer'></i> Print Timetable
                </button>
                <button class="btn-custom btn-download" onclick="downloadTimetable()">
                    <i class='bx bx-download'></i> Download PDF
                </button>
            </div>

        <?php else: ?>
            <div class="timetable-wrapper">
                <div class="no-data">
                    <i class='bx bx-calendar-x'></i>
                    <h3>No Timetable Available</h3>
                    <p>The timetable schedule hasn't been uploaded yet. Please check back later.</p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php include '../includes/footer.php'; ?>