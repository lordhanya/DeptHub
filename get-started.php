<?php include __DIR__ . '/includes/header.php'; ?>

<main class="gs-main">
  <section class="gs-hero-section">
    <div class="container">
      <div class="row align-items-center justify-content-center min-vh-100">
        <div class="col-lg-10 col-xl-8">
          <!-- Skip Button -->
          <a href="#" class="gs-skip-btn" data-bs-toggle="modal" data-bs-target="#registerModal">Skip to Register →</a>

          <!-- Modern Carousel Container -->
          <div class="gs-carousel-container">
            <div id="getStartedCarousel" class="carousel slide">
              <!-- Carousel Indicators -->
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#getStartedCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#getStartedCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#getStartedCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#getStartedCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#getStartedCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
              </div>

              <!-- Carousel Inner -->
              <div class="carousel-inner">
                <!-- Slide 1: Hero -->
                <div class="carousel-item active">
                  <div class="gs-slide-content">
                    <div class="gs-hero-content text-center" data-aos="fade-up" data-aos-duration="1000">
                      <div class="gs-hero-badge modern-badge mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <i class="bi bi-stars me-2"></i>Welcome to the Future
                      </div>
                      <h1 class="gs-hero-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        Welcome to <span class="highlight-text">DeptHub</span>
                      </h1>
                      <p class="gs-hero-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        Transform your educational experience with our comprehensive departmental management platform
                      </p>
                      <div class="gs-hero-buttons mt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                        <a href="#getStartedCarousel" class="btn modern-btn-hero modern-btn-primary me-3" onclick="carouselNext(); return false;">
                          <i class="bi bi-arrow-right-circle me-2"></i>Start Journey
                        </a>
                        <a href="#" class="btn modern-btn-hero btn-outline-light" data-bs-toggle="modal" data-bs-target="#registerModal">
                          <i class="bi bi-person-plus me-2"></i>Sign Up Now
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Slide 2: What is DeptHub -->
                <div class="carousel-item">
                  <div class="gs-slide-content">
                    <div class="gs-section-header text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                      <h2 class="gs-section-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">What is <span class="highlight-text">DeptHub</span>?</h2>
                      <p class="gs-section-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        An all-in-one platform designed to streamline educational institution management
                      </p>
                    </div>

                    <div class="gs-feature-showcase" data-aos="fade-up" data-aos-duration="1000">
                      <div class="gs-feature-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="gs-feature-icon">
                          <i class="bi bi-calendar3"></i>
                        </div>
                        <h4 class="gs-feature-title">Smart Scheduling</h4>
                        <p class="gs-feature-desc">Intelligent timetabling that optimizes resources and prevents conflicts</p>
                      </div>

                      <div class="gs-feature-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="gs-feature-icon">
                          <i class="bi bi-people"></i>
                        </div>
                        <h4 class="gs-feature-title">Attendance Tracking</h4>
                        <p class="gs-feature-desc">Automated attendance system with detailed analytics and reporting</p>
                      </div>

                      <div class="gs-feature-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="gs-feature-icon">
                          <i class="bi bi-graph-up"></i>
                        </div>
                        <h4 class="gs-feature-title">Performance Analytics</h4>
                        <p class="gs-feature-desc">Real-time insights into student and institutional performance</p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Slide 3: Student Benefits -->
                <div class="carousel-item">
                  <div class="gs-slide-content">
                    <div class="gs-section-header text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                      <h2 class="gs-section-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">For <span class="highlight-text">Students</span></h2>
                      <p class="gs-section-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        Everything you need to succeed in your academic journey
                      </p>
                    </div>

                     <div class="gs-benefits-grid" data-aos="fade-up" data-aos-duration="1000">
                       <div class="gs-benefit-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                         <div class="gs-benefit-icon">
                           <i class="bi bi-calendar-check"></i>
                         </div>
                         <h5 class="gs-benefit-title">View Your Schedule</h5>
                         <p class="gs-benefit-desc">Access your class schedules, exam dates, and important deadlines</p>
                       </div>

                       <div class="gs-benefit-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                         <div class="gs-benefit-icon">
                           <i class="bi bi-file-earmark-text"></i>
                         </div>
                         <h5 class="gs-benefit-title">Assignments & Grades</h5>
                         <p class="gs-benefit-desc">Submit assignments and track your academic progress</p>
                       </div>

                       <div class="gs-benefit-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                         <div class="gs-benefit-icon">
                           <i class="bi bi-chat-dots"></i>
                         </div>
                         <h5 class="gs-benefit-title">Connect & Collaborate</h5>
                         <p class="gs-benefit-desc">Stay connected with teachers and classmates</p>
                       </div>
                     </div>
                  </div>
                </div>

                <!-- Slide 4: Teacher Benefits -->
                <div class="carousel-item">
                  <div class="gs-slide-content">
                    <div class="gs-section-header text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                      <h2 class="gs-section-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">For <span class="highlight-text">Teachers</span></h2>
                      <p class="gs-section-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        Powerful tools to enhance your teaching experience
                      </p>
                    </div>

                     <div class="gs-benefits-grid" data-aos="fade-up" data-aos-duration="1000">
                       <div class="gs-benefit-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                         <div class="gs-benefit-icon">
                           <i class="bi bi-person-check"></i>
                         </div>
                         <h5 class="gs-benefit-title">Manage Attendance</h5>
                         <p class="gs-benefit-desc">Track student attendance with automated reporting</p>
                       </div>

                       <div class="gs-benefit-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                         <div class="gs-benefit-icon">
                           <i class="bi bi-award"></i>
                         </div>
                         <h5 class="gs-benefit-title">Grade Management</h5>
                         <p class="gs-benefit-desc">Efficient grading system with comprehensive reports</p>
                       </div>

                       <div class="gs-benefit-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                         <div class="gs-benefit-icon">
                           <i class="bi bi-people-fill"></i>
                         </div>
                         <h5 class="gs-benefit-title">Class Management</h5>
                         <p class="gs-benefit-desc">Organize classes, share materials, and communicate</p>
                       </div>
                     </div>
                  </div>
                </div>

                <!-- Slide 5: Choose Your Path -->
                <div class="carousel-item">
                  <div class="gs-slide-content">
                    <div class="gs-section-header text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                      <h2 class="gs-section-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Choose Your <span class="highlight-text">Path</span></h2>
                      <p class="gs-section-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        Select how you'll use DeptHub to get most relevant experience
                      </p>
                    </div>

                     <div class="gs-final-cta" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                       <h3 class="gs-cta-title">Ready to Get Started?</h3>
                       <p class="gs-cta-desc">Join thousands of students and teachers already using DeptHub</p>

                       <div class="gs-path-buttons" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                         <a href="#" class="gs-path-btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" onclick="gsSelectUserType('student'); return false;">
                           <div class="gs-path-icon">
                             <i class="bi bi-mortarboard"></i>
                           </div>
                           <div>
                             <h5 class="gs-path-title">Student</h5>
                             <p class="gs-path-desc">Access schedules, assignments, and grades</p>
                           </div>
                         </a>

                         <a href="#" class="gs-path-btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" onclick="gsSelectUserType('teacher'); return false;">
                           <div class="gs-path-icon">
                             <i class="bi bi-chalkboard"></i>
                           </div>
                           <div>
                             <h5 class="gs-path-title">Teacher</h5>
                             <p class="gs-path-desc">Manage classes, attendance, and grading</p>
                           </div>
                         </a>
                       </div>
                     </div>
                  </div>
                </div>
              </div>

              <!-- Carousel Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#getStartedCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#getStartedCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>