<?php
include '../../db/connection.php';
include '../includes/header.php';
include '../includes/dashboard_header.php';
include 'teacher_sidebar.php';
// include '../chatbot/chatbot.php';
?>
<main>
    <div id="main-content">
        <div class="info-container m-5">
            <div class="row m-5">
                <div class="col-sm-12 m-5">
                    <div class="welcome-heading mb-5 text-center">
                        <h2>Welcome to Depthub (Teacher Dashboard)</h2>
                        <p>
                            Empower your classes, manage students, and handle departmental activities in one place. 
                            This is your command center for teaching and coordination.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card w3-animate-left border-0" style="max-width: 30rem; animation-duration: 0.8s;">
                                <div class="card-header text-white">
                                    <h3>🗂️ Classes You're Teaching</h3>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Active Classes</h5>
                                    <p class="card-text">Quick overview of your current classes, student counts, and assigned sections.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card w3-animate-right border-0" style="max-width: 30rem; animation-duration: 0.8s;">
                                <div class="card-header text-white">
                                    <h3>📥 Assignment Submissions</h3>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Recent Submissions</h5>
                                    <p class="card-text">Review and provide feedback for the latest student submissions or pending grading tasks.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card w3-animate-left border-0" style="max-width: 30rem; animation-duration: 0.8s;">
                                <div class="card-header text-white">
                                    <h3>📊 Attendance Overview</h3>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Today's Attendance</h5>
                                    <p class="card-text">Snapshot of class attendance taken, missing records, or students with frequent absences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card w3-animate-right border-0" style="max-width: 30rem; animation-duration: 0.8s;">
                                <div class="card-header text-white">
                                    <h3>📅 Upcoming Exams & Assessments</h3>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Exam Schedule</h5>
                                    <p class="card-text">See all upcoming scheduled exams or assessments you are responsible for.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more teacher-centric cards as needed, such as "Messages from Admin" or "Project/Internship Reviews" -->
                </div>
            </div>
        </div>
    </div>
</main>
<?php include '../includes/footer.php'; ?>
