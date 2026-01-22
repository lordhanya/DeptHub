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
                <li><a href="student_dashboard.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom mt-3"><i class='bx bx-home-alt'></i> Dashboard</a></li>
                <li><a href="student_timetable.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-calendar-alt'></i> Timetable</a></li>
                <li><a href="student_notes.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-note-book'></i> Notes</a></li>
                <li><a href="student_assignments.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-pen-alt'></i> Assignments</a></li>
                <li><a href="student_attendance.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-bar-chart-square'></i> Attendance</a></li>
                <li><a href="#" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-user'></i> Profile</a></li>
                <li><a href="../includes/index.php" class="w3-bar-item w3-button mb-3 w3-animate-zoom"><i class='bx bx-door-open'></i> Logout</a></li>
            </ul>
        </div>
    </div>