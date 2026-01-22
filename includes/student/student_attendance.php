<?php
include '../db/connection.php';
include 'header.php';
include 'dashboard_header.php';
include 'student_sidebar.php';
?>
<main>
    <section class="attendance-tab mt-3">
        <div class="attendance-container my-5" id="main-content">
            <!-- Header -->
            <div class="attendance-header text-center mb-4">
                <h2>Attendance Tab</h2>
                <p class="text-muted">View and manage attendance records for the semester</p>

                <!-- Filters -->
                <div class="filters my-3">
                    <select name="semester" id="semester" class="form-select d-inline-block w-auto">
                        <option value="">Select Semester</option>
                        <option value="1">Semester 1</option>
                        <option value="2">Svaluevalueemester 2</option>
                        <option value="3">Semester 3</option>
                        <option value="4">Semester 4</option>
                        <option value="5">Semester 5</option>
                        <option value="6">Semester 6</option>
                    </select>

                    <select name="month" id="month" class="form-select d-inline-block w-auto ms-2">
                        <option value="">Select Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>
                <!-- Summary Section -->
                <div class="attendance-summary mb-4">
                    <h5>Overall Attendance</h5>
                    <p><strong>21</strong> / 24 Classes Attended</p>
                    <div class="progress" style="height: 20px;">
                        <div class="progress-bar" role="progressbar" style="width: 87%;" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100">87%</div>
                    </div>
                </div>

                <!-- Calendar Section -->
                <div class="attendance-calendar mb-4">
                    <table class="table table-bordered text-center">
                        <thead class="table-light">
                            <tr>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                                <th>Sun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Row -->
                            <tr>
                                <td class="bg-success text-white">P</td>
                                <td class="bg-danger text-white">A</td>
                                <td class="bg-success text-white">P</td>
                                <td>-</td>
                                <td class="bg-success text-white">P</td>
                                <td class="bg-danger text-white">A</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="bg-success text-white">P</td>
                                <td class="bg-success text-white">P</td>
                                <td>-</td>
                                <td class="bg-success text-white">P</td>
                                <td class="bg-success text-white">P</td>
                                <td class="bg-danger text-white">A</td>
                                <td>-</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>

                <!-- Request Attendance Section -->
                <div class="attendance-request text-center">
                    <h5>Missed a class? Request attendance update</h5>
                    <button class="btn btn-primary mt-2">
                        <i class="bx bx-send"></i> Send Attendance Request
                    </button>

                    <!-- Request History -->
                    <div class="request-history mt-4">
                        <h6>Your Requests</h6>
                        <table class="table table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Teacher's Response</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>05 Aug 2025</td>
                                    <td>Pending</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>02 Aug 2025</td>
                                    <td>Approved</td>
                                    <td>Marked Present</td>
                                </tr>
                                <tr>
                                    <td>29 Jul 2025</td>
                                    <td>Rejected</td>
                                    <td>Absent confirmed</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>