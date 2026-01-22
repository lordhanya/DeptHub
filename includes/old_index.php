<?php include __DIR__ . '/header.php'; ?>
<main>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top m-1 px-3" role="navigation">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <a class="navbar-brand d-flex align-items-center" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000" href="../includes/index.php">
                    <img src="../images/title-logo.png" alt="DeptHub Logo" width="50" height="50" class="me-2" />
                    <span class="fs-3 fw-bold">DeptHub</span>
                </a>
                <div class="nav-box d-flex align-items-center justify-content-center" data-aos="zoom-in-down" data-aos-duration="1000">
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#welcome">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#benefits">Benefits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonials">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <button type="button" class="btn register-btn text-white" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000" aria-label="Get Started" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Get Started
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h3 class="modal-title" id="registerModalLabel">Create an Account</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">

                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs mb-3" id="registerTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="student-tab" data-bs-toggle="tab"
                                data-bs-target="#student" type="button" role="tab">Student</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="teacher-tab" data-bs-toggle="tab" data-bs-target="#teacher"
                                type="button" role="tab">Teacher</button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="registerTabsContent">

                        <!-- Student Form -->
                        <div class="tab-pane fade show active" id="student" role="tabpanel">
                            <form>
                                <div class="mb-3">
                                    <label for="studentName" class="form-label">Student Name <span>(Full
                                            Name)</span></label>
                                    <input type="name" class="form-control" id="studentName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="studentEmail" class="form-label">Student Email</label>
                                    <input type="email" class="form-control" id="studentEmail" required>
                                </div>
                                <div class="mb-3">
                                    <label for="studentPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="studentPassword" required>
                                </div>
                                <div class="mb-3">
                                    <label for="studentPassword" class="form-label">Re-enter your password</label>
                                    <input type="password" class="form-control" id="studentPasswordConfirm" required>
                                </div>
                                <button type="submit" class="btn submit-btn">Register as Student</button>
                            </form>
                        </div>

                        <!-- Teacher Form -->
                        <div class="tab-pane fade" id="teacher" role="tabpanel">
                            <form>
                                <div class="mb-3">
                                    <label for="teacherName" class="form-label">Teacher Name <span>(Full
                                            Name)</span>
                                    </label>
                                    <input type="name" class="form-control" id="teacherName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="teacherEmail" class="form-label">Teacher Email</label>
                                    <input type="email" class="form-control" id="teacherEmail" required>
                                </div>
                                <div class="mb-3">
                                    <label for="teacherPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="teacherPassword" required>
                                </div>
                                <div class="mb-3">
                                    <label for="teacherPassword" class="form-label">Re-enter your password</label>
                                    <input type="password" class="form-control" id="teacherPasswordConfirm" required>
                                </div>
                                <button type="submit" class="btn submit-btn">Register as Teacher</button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- WELCOME SECTION -->
    <section class="first-section" id="welcome">
        <div class="row align-items-center text-left">
            <div class="welcome-container">
                <h1 class="depthub_1"
                    data-aos="slide-right"
                    data-aos-duration="1000"
                    data-aos-delay="100">
                    your <span class="hit">DEPT.</span>
                </h1>
                <h1 class="depthub_2"
                    data-aos="slide-right"
                    data-aos-duration="1000"
                    data-aos-delay="600">
                    your <span class="hit">HUB.</span>
                </h1>
                <h1 class="depthub_3"
                    data-aos="slide-right"
                    data-aos-duration="1000"
                    data-aos-delay="1200">
                    your <span class="hit">SUCCESS.</span>
                </h1>
                <div class="caption text-white mt-5"
                    data-aos="fade-in"
                    data-aos-delay="1500"
                    data-aos-duration="1600">
                    <h2 class="one-liner">All your routines, records, reports, and results — in one hub.</h2> 
                    <p>Simplify academics, streamline communication, and stay connected.</p>
                </div>
            </div>
            <div class="button-groups d-flex align-items-center gap-4 mt-4">
                <a type="button" href="#about" data-aos="fade-in" data-aos-delay="2000" data-aos-duration="1000" href="#about" class="btn learn-more-btn d-flex align-items-center gap-2">
                    Learn more
                    <i class='bxr bx-arrow-out-up-right-square'></i>
                </a>
                <button type="button" data-aos="fade-in" data-aos-delay="2000" data-aos-duration="1000" class="btn register-btn text-white"
                    data-bs-toggle="modal" data-bs-target="#registerModal">
                    Get Started
                </button>
            </div>
        </div>
        </div>

        <!-- STUDENT LOGIN MODAL -->
        <div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="studentModalLabel">Student Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form onsubmit="event.preventDefault();">
                            <div class="mb-3">
                                <label for="studentEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="studentEmail" required>
                                <div class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="studentPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="studentPassword" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="studentCheck">
                                <label class="form-check-label" for="studentCheck">I agree with the terms and
                                    conditions.</label>
                            </div>
                            <div class="mb-3 no-acc">
                                <p>
                                    Don't have an account?
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Click
                                        here.</a>
                                </p>
                            </div>
                            <button type="submit" class="btn submit-btn w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- TEACHER LOGIN MODAL -->
        <div class="modal fade" id="teacherModal" tabindex="-1" aria-labelledby="teacherModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="teacherModalLabel">Teacher Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form onsubmit="event.preventDefault();">
                            <div class="mb-3">
                                <label for="teacherEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="teacherEmail" required>
                                <div class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="teacherPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="teacherPassword" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="teacherCheck">
                                <label class="form-check-label" for="teacherCheck">I agree with the terms and
                                    conditions.</label>
                            </div>
                            <div class="mb-3 no-acc">
                                <p>Don't have an account? <a href="#">Click here.</a></p>
                            </div>
                            <button type="submit" class="btn submit-btn w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ANNOUNCEMENTS SECTIOIN -->
    <section class="announcements-section " id="announcements">
        <div class="row">
            <div class="col-6">
                <div class="announcement-container">
                    <div id="carouselExampleAutoplaying" class="carousel announcement-carousel slide"
                        data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card-container">
                                    <div class="announcement-card" style="max-width: 18rem;">
                                        <div class="announcement-header text-white">Header</div>
                                        <div class="card-body text-primary">
                                            <h5 class="card-title">Primary card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card’s content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-container">
                                    <div class="announcement-card" style="max-width: 18rem;">
                                        <div class="announcement-header text-white">Header</div>
                                        <div class="card-body text-primary">
                                            <h5 class="card-title">Primary card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card’s content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-container">
                                    <div class="announcement-card" style="max-width: 18rem;">
                                        <div class="announcement-header text-white">Header</div>
                                        <div class="card-body text-primary">
                                            <h5 class="card-title">Primary card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card’s content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="announcement-heading">
                    <h1 class="text-white text-center mb-5">Announcements</h1>
                    <p class="text-white text-center mb-3">Stay updated with the latest news and important notifications from our team.</p>
                    <ul class="text-white">
                        <li>New features rolling out soon</li>
                        <li>Scheduled maintenance on Saturday</li>
                        <li>Join our upcoming webinar</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="about-section " id="about">
        <div class="row">
            <div class="col-6">
                <div class="about-heading">
                    <h1 class="text-center text-white">About DeptHub</h1>
                </div>
            </div>
            <div class="col-6">
                <div class="about-container">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide card">Card 1</div>
                            <div class="swiper-slide card">Card 2</div>
                            <div class="swiper-slide card">Card 3</div>
                            <div class="swiper-slide card">Card 4</div>
                        </div>

                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- Navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section class="contact-section" id="contact">
        <div class="contact-container mt-5">
            <h1 class="text-center text-white mb-4 ">Contact Dev.</h1>
            <form>
                <div class="mb-4">
                    <label for="contactName" class="form-label text-white">Full Name</label>
                    <input type="text" class="form-control text-white" id="contactName" placeholder="Your name" required>
                </div>
                <div class="mb-4">
                    <label for="contactEmail" class="form-label text-white">Email address</label>
                    <input type="email" class="form-control text-white" id="contactEmail" placeholder="name@example.com" required>
                </div>
                <div class="mb-4">
                    <label for="contactSubject" class="form-label text-white">Subject</label>
                    <input type="text" class="form-control text-white" id="contactSubject" placeholder="Subject" required>
                </div>
                <div class="mb-4">
                    <label for="contactMessage" class="form-label text-white">Your Message</label>
                    <textarea class="form-control text-white" id="contactMessage" rows="5" placeholder="Type your message here..."
                        required></textarea>
                </div>
                <button type="submit" class="btn submit-btn">Send Message</button>
            </form>
        </div>
    </section>
</main>
<?php include __DIR__ . '/footer.php'; ?>