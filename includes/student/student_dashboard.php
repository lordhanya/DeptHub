<?php
include '../../db/connection.php';
include '../includes/header.php';
include '../includes/dashboard_header.php';
include 'student_sidebar.php';
?>

<main>
    <div id="main-content">
        <div class="info-container m-5">
            <div class="row m-5">
                <div class="col-sm-12 m-5">
                    <div class="welcome-heading mb-5 text-center">
                        <h2>Welcome to Depthub</h2>
                        <p>Glad to have you here! This is your personalized dashboard where you can explore insights, manage tasks, and access all key features with ease.</p>

                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card w3-animate-left border-0" style="max-width: 30rem; animation-duration: 0.8s;">
                                <div class="card-header text-white">
                                    <h3>📅 Today’s Class Schedule</h3>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Dark card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card w3-animate-right border-0" style="max-width: 30rem; animation-duration: 0.8s;">
                                <div class="card-header text-white">
                                    <h3>📚 Latest Notes from Teachers</h3>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Dark card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card w3-animate-left border-0" style="max-width: 30rem; animation-duration: 0.8s;">
                                <div class="card-header text-white">
                                    <h3>📝 Pending Assignments</h3>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Dark card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card w3-animate-right border-0" style="max-width: 30rem; animation-duration: 0.8s;">
                                <div class="card-header text-white">
                                    <h3>📊 Attendance Summary</h3>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Dark card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include '../includes/footer.php'; ?>