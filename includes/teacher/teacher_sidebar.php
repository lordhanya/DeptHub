<?php include '../includes/header.php';?>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
    <div class="sidebar-contents">
        <div class="d-flex justify-content-between align-items-center px-3 pt-4">
            <h3><i class='bx bx-categories'></i>  Menu</h3>
            <button onclick="w3_close()" class="btn close-btn bg-transparent w3-animate-zoom">
                <i class='bx bx-x-circle fs-2 mb-3'></i>
            </button>
        </div>
        <ul>
            <li><a href="teacher_dashboard.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom mt-3"><i class='bx bx-widget-horizontal'></i> Dashboard</a></li>
            <li><a href="teacher_classes.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-community'></i> My Classes</a></li>
            <li><a href="students.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-user'></i> Students</a></li>
            <li><a href="teacher_schedule.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-calendar'></i> Schedule</a></li>
            <li><a href="assignments_review.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-check-square'></i> Assignments Review</a></li>
            <li><a href="teacher_notes_upload.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-folder-up-arrow'></i> Upload Notes</a></li>
            <li><a href="attendance_manage.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-bar-chart-square'></i> Attendance</a></li>
            <li><a href="exams.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-edit'></i> Exams/Assessments</a></li>
            <li><a href="internship_projects.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-briefcase-alt'></i> Internships & Projects</a></li>
            <li><a href="notices.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-pin'></i> Notices</a></li>
            <li><a href="profile.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-user-circle'></i> Profile</a></li>
            <li><a href="index.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-door-open'></i> Logout</a></li>
        </ul>
    </div>
</div>
