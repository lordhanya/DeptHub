<?php include __DIR__ . '/includes/header.php'; ?>
<main>
    <header class="modern-header">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top px-lg-5 px-3 py-3">
            <div class="container-fluid">

                <a class="navbar-brand d-flex align-items-center" href="#home">
                    <div class="brand-logo me-3">
                        <img src="assets/images/title-logo.png" alt="DeptHub Logo" class="img-fluid" style="max-height: 50px;" />
                    </div>
                    <div class="brand-text">
                        <h1 class="mb-0 h4">DeptHub</h1>
                        <small class="text-light opacity-75 d-none d-md-block">Excellence in Education</small>
                    </div>
                </a>


                <button class="navbar-toggler modern-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarToggler">

                    <ul class="navbar-nav nav-box mx-auto mb-lg-0 d-flex align-items-center justify-content-center py-2">
                        <li class="nav-item mx-lg-2 mx-1">
                            <a class="nav-link active" aria-current="page" href="#home"><i class="bi bi-house me-2"></i>Home</a>
                        </li>
                        <li class="nav-item mx-lg-2 mx-1">
                            <a class="nav-link" href="#about"><i class="bi bi-info-circle me-2"></i>About</a>
                        </li>
                        <li class="nav-item mx-lg-2 mx-1">
                            <a class="nav-link" href="#features"><i class="bi bi-star me-2"></i>Features</a>
                        </li>
                        <li class="nav-item mx-lg-2 mx-1">
                            <a class="nav-link" href="#benefits"><i class="bi bi-gift me-2"></i>Benefits</a>
                        </li>
                        <li class="nav-item mx-lg-2 mx-1">
                            <a class="nav-link" href="#testimonials"><i class="bi bi-quote me-2"></i>Testimonials</a>
                        </li>
                        <li class="nav-item mx-lg-2 mx-1">
                            <a class="nav-link" href="#contact"><i class="bi bi-envelope me-2"></i>Contact</a>
                        </li>
                    </ul>

                    <div class="d-flex gap-2 ms-lg-3 nav-btns">
                        <button type="button" class="btn btn-outline-light btn-sm modern-btn px-3 py-2" data-bs-toggle="modal" data-bs-target="#studentModal">
                            <i class="bi bi-box-arrow-in-right me-1"></i>Login
                        </button>
                        <button type="button" class="btn btn-light btn-sm modern-btn modern-btn-primary px-3 py-2" data-bs-toggle="modal" data-bs-target="#registerModal">
                            <i class="bi bi-person-plus me-1"></i>Sign Up
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Modern Hero Section -->
    <section class="modern-hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6 modern-hero-content">
                    <div class="hero-content-wrapper mt-5">
                        <div class="hero-badge mb-3" data-aos="fade-up" data-aos-duration="800">
                            <span class="badge modern-badge">
                                <i class="bi bi-lightning-charge me-2"></i>
                                Transform Your Department Management
                            </span>
                        </div>

                        <div class="hero-headline" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <h1 class="display-3 fw-bold mb-0">
                                <span class="text-white">your</span> <span class="highlight-text">DEPT.</span>
                            </h1>
                            <h1 class="display-3 fw-bold mb-0">
                                <span class="text-white">your</span> <span class="highlight-text">HUB.</span>
                            </h1>
                            <h1 class="display-3 fw-bold mb-0">
                                <span class="text-white">your</span> <span class="highlight-text">SUCCESS.</span>
                            </h1>
                        </div>

                        <div class="hero-description" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <p class="lead text-light opacity-75">
                                All your routines, records, reports, and results — in one intelligent hub.
                                Simplify academics, streamline communication, and elevate educational excellence.
                            </p>
                        </div>

                        <div class="hero-stats" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <div class="row g-4">
                                <div class="col-4">
                                    <div class="stat-card text-center">
                                        <div class="stat-icon">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                        <h3 class="stat-number">10K+</h3>
                                        <p class="stat-label">Students</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="stat-card text-center">
                                        <div class="stat-icon">
                                            <i class="bi bi-mortarboard-fill"></i>
                                        </div>
                                        <h3 class="stat-number">500+</h3>
                                        <p class="stat-label">Teachers</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="stat-card text-center">
                                        <div class="stat-icon">
                                            <i class="bi bi-graph-up"></i>
                                        </div>
                                        <h3 class="stat-number">99.9%</h3>
                                        <p class="stat-label">Uptime</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hero-actions mt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                            <div class="d-flex flex-wrap gap-3">
                                <button type="button" class="btn btn-primary btn-lg modern-btn-hero" data-bs-toggle="modal" data-bs-target="#registerModal">
                                    <i class="bi bi-rocket-takeoff me-2"></i>Get Started
                                </button>
                                <a href="#features" class="btn btn-outline-light btn-lg modern-btn-hero">
                                    <i class="bi bi-arrow-up-right-square-fill me-2"></i>Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 modern-hero-visual">
                    <div class="hero-visual-wrapper" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="400">
                        <div class="dashboard-showcase">
                            <div class="showcase-card floating-card floating-1" data-aos="zoom-in" data-aos-delay="600">
                                <div class="showcase-icon">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </div>
                                <h6>Analytics</h6>
                                <p>Real-time insights</p>
                            </div>
                            <div class="showcase-card floating-card floating-2" data-aos="zoom-in" data-aos-delay="800">
                                <div class="showcase-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <h6>Students</h6>
                                <p>Complete management</p>
                            </div>
                            <div class="showcase-card floating-card floating-3" data-aos="zoom-in" data-aos-delay="1000">
                                <div class="showcase-icon">
                                    <i class="bi bi-calendar3"></i>
                                </div>
                                <h6>Schedule</h6>
                                <p>Smart timetabling</p>
                            </div>
                            <div class="showcase-card floating-card floating-4" data-aos="zoom-in" data-aos-delay="1200">
                                <div class="showcase-icon">
                                    <i class="bi bi-file-earmark-text"></i>
                                </div>
                                <h6>Reports</h6>
                                <p>Comprehensive reports</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modern About Section -->
    <section class="modern-about min-vh-100 d-flex align-items-center" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="about-content" data-aos="fade-right" data-aos-duration="1000">
                        <div class="section-badge mb-4">
                            <span class="badge modern-badge">
                                <i class="bi bi-info-circle me-2"></i>About Us
                            </span>
                        </div>
                        <h2 class="display-5 fw-bold text-white mb-4">Empowering Educational Excellence</h2>
                        <p class="text-light opacity-75 mb-4">
                            DeptHub is a comprehensive departmental management platform designed specifically for educational institutions.
                            We bridge the gap between students, teachers, and administration through seamless digital transformation.
                        </p>
                        <div class="about-features">
                            <div class="feature-item d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="feature-icon me-3">
                                    <i class="bi bi-gear-fill"></i>
                                </div>
                                <div>
                                    <h6 class="text-white mb-2">Streamlined Operations</h6>
                                    <p class="text-light opacity-75 mb-0">Automate routine tasks and reduce administrative burden</p>
                                </div>
                            </div>
                            <div class="feature-item d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="feature-icon me-3">
                                    <i class="bi bi-chat-dots-fill"></i>
                                </div>
                                <div>
                                    <h6 class="text-white mb-2">Real-time Communication</h6>
                                    <p class="text-light opacity-75 mb-0">Connect students and teachers instantly</p>
                                </div>
                            </div>
                            <div class="feature-item d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="feature-icon me-3">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </div>
                                <div>
                                    <h6 class="text-white mb-2">Data-Driven Insights</h6>
                                    <p class="text-light opacity-75 mb-0">Make informed decisions with analytics</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-visual" data-aos="fade-left" data-aos-duration="1000">
                        <div class="platform-showcase">
                            <div class="showcase-card active" data-aos="zoom-in" data-aos-delay="100">
                                <div class="showcase-icon">
                                    <i class="bi bi-mortarboard-fill"></i>
                                </div>
                                <h5>Student Portal</h5>
                                <p>Access schedules, assignments, and grades</p>
                            </div>
                            <div class="showcase-card" data-aos="zoom-in" data-aos-delay="200">
                                <div class="showcase-icon">
                                    <i class="bi bi-postcard"></i>
                                </div>
                                <h5>Teacher Dashboard</h5>
                                <p>Manage classes, attendance, and assessments</p>
                            </div>
                            <div class="showcase-card" data-aos="zoom-in" data-aos-delay="300">
                                <div class="showcase-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h5>Admin Panel</h5>
                                <p>Oversee operations and generate reports</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modern Features Section -->
    <section class="modern-features min-vh-100 d-flex align-items-center" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                        <div class="section-badge mx-auto mb-3">
                            <span class="badge modern-badge">
                                <i class="bi bi-star me-2"></i>Features
                            </span>
                        </div>
                        <h2 class="display-5 fw-bold text-white mb-4">Everything You Need in One Platform</h2>
                        <p class="text-light opacity-75 mx-auto" style="max-width: 600px;">
                            Discover the powerful features that make DeptHub the ultimate solution for departmental management
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="modern-feature-card h-100">
                        <div class="feature-icon-wrapper">
                            <div class="feature-icon">
                                <i class="bi bi-calendar3"></i>
                            </div>
                        </div>
                        <h4 class="text-white mb-3">Smart Scheduling</h4>
                        <p class="text-light opacity-75 mb-3">
                            Intelligent timetabling system that optimizes class schedules, manages conflicts, and ensures efficient resource utilization.
                        </p>
                        <div class="feature-highlights">
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Automatic conflict resolution
                            </div>
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Room and resource allocation
                            </div>
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Real-time schedule updates
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="modern-feature-card h-100">
                        <div class="feature-icon-wrapper">
                            <div class="feature-icon">
                                <i class="bi bi-person-check"></i>
                            </div>
                        </div>
                        <h4 class="text-white mb-3">Attendance Tracking</h4>
                        <p class="text-light opacity-75 mb-3">
                            Comprehensive attendance management with biometric integration, automated reports, and parental notifications.
                        </p>
                        <div class="feature-highlights">
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Biometric & QR check-in
                            </div>
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Automated absence alerts
                            </div>
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Detailed attendance analytics
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="modern-feature-card h-100">
                        <div class="feature-icon-wrapper">
                            <div class="feature-icon">
                                <i class="bi bi-award"></i>
                            </div>
                        </div>
                        <h4 class="text-white mb-3">Grade Management</h4>
                        <p class="text-light opacity-75 mb-3">
                            Streamlined grading system with customizable rubrics, automated calculations, and comprehensive report generation.
                        </p>
                        <div class="feature-highlights">
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Custom grading scales
                            </div>
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Automated GPA calculation
                            </div>
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Instant report cards
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="modern-feature-card h-100">
                        <div class="feature-icon-wrapper">
                            <div class="feature-icon">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                        </div>
                        <h4 class="text-white mb-3">Communication Hub</h4>
                        <p class="text-light opacity-75 mb-3">
                            Unified communication platform connecting students, teachers, parents, and administrators through multiple channels.
                        </p>
                        <div class="feature-highlights">
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>In-app messaging system
                            </div>
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Email & SMS notifications
                            </div>
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Parent-teacher scheduling
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="modern-feature-card h-100">
                        <div class="feature-icon-wrapper">
                            <div class="feature-icon">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                        </div>
                        <h4 class="text-white mb-3">Assignment Management</h4>
                        <p class="text-light opacity-75 mb-3">
                            Complete assignment lifecycle management from creation to grading, with plagiarism detection and feedback tools.
                        </p>
                        <div class="feature-highlights">
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Digital submission portal
                            </div>
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Plagiarism checking
                            </div>
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Collaborative feedback
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="modern-feature-card h-100">
                        <div class="feature-icon-wrapper">
                            <div class="feature-icon">
                                <i class="bi bi-graph-up"></i>
                            </div>
                        </div>
                        <h4 class="text-white mb-3">Analytics Dashboard</h4>
                        <p class="text-light opacity-75 mb-3">
                            Powerful analytics and reporting tools providing insights into student performance, attendance trends, and institutional metrics.
                        </p>
                        <div class="feature-highlights">
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Real-time data visualization
                            </div>
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Custom report builder
                            </div>
                            <div class="highlight-item">
                                <i class="bi bi-check-circle me-2"></i>Predictive analytics
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modern Benefits Section -->
    <section class="modern-benefits min-vh-100 d-flex align-items-center" id="benefits">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-header text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                        <div class="section-badge mx-auto mb-3">
                            <span class="badge modern-badge">
                                <i class="bi bi-gift me-2"></i>Benefits
                            </span>
                        </div>
                        <h2 class="display-5 fw-bold text-white mb-4">Why Choose DeptHub?</h2>
                        <p class="text-light opacity-75 mx-auto" style="max-width: 600px;">
                            Transform your institution with measurable benefits that impact every stakeholder
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-4 align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="benefit-metrics">
                        <div class="metric-card mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="metric-header">
                                <h3 class="text-white mb-0">85%</h3>
                                <small class="text-light opacity-75">Time Saved</small>
                            </div>
                            <div class="metric-bar">
                                <div class="metric-fill" style="width: 85%;"></div>
                            </div>
                        </div>

                        <div class="metric-card mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="metric-header">
                                <h3 class="text-white mb-0">92%</h3>
                                <small class="text-light opacity-75">Parent Satisfaction</small>
                            </div>
                            <div class="metric-bar">
                                <div class="metric-fill" style="width: 92%;"></div>
                            </div>
                        </div>

                        <div class="metric-card mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="metric-header">
                                <h3 class="text-white mb-0">3x</h3>
                                <small class="text-light opacity-75">Faster Reporting</small>
                            </div>
                            <div class="metric-bar">
                                <div class="metric-fill" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="benefit-list">
                        <div class="benefit-item d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="benefit-icon me-3">
                                <i class="bi bi-clock-history"></i>
                            </div>
                            <div>
                                <h5 class="text-white mb-2">Save Administrative Time</h5>
                                <p class="text-light opacity-75 mb-0">Automate routine tasks and reduce paperwork by up to 85%</p>
                            </div>
                        </div>

                        <div class="benefit-item d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="benefit-icon me-3">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <div>
                                <h5 class="text-white mb-2">Cost Effective</h5>
                                <p class="text-light opacity-75 mb-0">Reduce operational costs while improving service quality</p>
                            </div>
                        </div>

                        <div class="benefit-item d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="benefit-icon me-3">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div>
                                <h5 class="text-white mb-2">Enhanced Security</h5>
                                <p class="text-light opacity-75 mb-0">Enterprise-grade security with role-based access control</p>
                            </div>
                        </div>

                        <div class="benefit-item d-flex align-items-start" data-aos="fade-up" data-aos-delay="400">
                            <div class="benefit-icon me-3">
                                <i class="bi bi-phone"></i>
                            </div>
                            <div>
                                <h5 class="text-white mb-2">Mobile Access</h5>
                                <p class="text-light opacity-75 mb-0">Access all features from any device, anywhere, anytime</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modern Testimonials Section -->
    <section class="modern-testimonials min-vh-100 d-flex align-items-center" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                        <div class="section-badge mx-auto mb-3">
                            <span class="badge modern-badge">
                                <i class="bi bi-quote me-2"></i>Testimonials
                            </span>
                        </div>
                        <h2 class="display-5 fw-bold text-white mb-4">What Our Users Say</h2>
                        <p class="text-light opacity-75 mx-auto" style="max-width: 600px;">
                            Real experiences from educators, students, and administrators who trust DeptHub
                        </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-container">
                <div id="carouselExampleAutoplaying" class="carousel testimonial-carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Testimonial 1 -->
                        <div class="carousel-item active">
                            <div class="card-container d-flex justify-content-center">
                                <div class="testimonial-card" style="max-width: 18rem;">
                                    <div class="testimonial-header text-white">
                                        <div class="quote-icon mb-3">
                                            <i class="bi bi-quote" style="font-size: 3rem; opacity: 0.3;"></i>
                                        </div>
                                    </div>
                                    <div class="card-body text-primary">
                                        <div class="testimonial-content">
                                            <p class="mb-4 card-text">
                                                DeptHub has revolutionized how we manage our department. The time savings alone have been incredible, and our teachers can now focus on what matters most - teaching.
                                            </p>
                                            <div class="testimonial-author">
                                                <div class="author-avatar">
                                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face" alt="Dr. Sarah Johnson" class="rounded-circle img-fluid">
                                                </div>
                                                <div class="author-info ms-3">
                                                    <h6 class="text-white mb-0">Dr. Sarah Johnson</h6>
                                                    <small class="text-light opacity-75">Head of Computer Science<br>Tech University</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="carousel-item">
                            <div class="card-container d-flex justify-content-center">
                                <div class="testimonial-card" style="max-width: 18rem;">
                                    <div class="testimonial-header text-white">
                                        <div class="quote-icon mb-3">
                                            <i class="bi bi-quote" style="font-size: 3rem; opacity: 0.3;"></i>
                                        </div>
                                    </div>
                                    <div class="card-body text-primary">
                                        <div class="testimonial-content">
                                            <p class="mb-4 card-text">
                                                As a student coordinator, DeptHub has made scheduling events and tracking attendance effortless. The mobile responsiveness is perfect for on-the-go management.
                                            </p>
                                            <div class="testimonial-author">
                                                <div class="author-avatar">
                                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face" alt="Rahul Sharma" class="rounded-circle img-fluid">
                                                </div>
                                                <div class="author-info ms-3">
                                                    <h6 class="text-white mb-0">Rahul Sharma</h6>
                                                    <small class="text-light opacity-75">Student Coordinator<br>Pragjyotish College</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="carousel-item">
                            <div class="card-container d-flex justify-content-center">
                                <div class="testimonial-card" style="max-width: 18rem;">
                                    <div class="testimonial-header text-white">
                                        <div class="quote-icon mb-3">
                                            <i class="bi bi-quote" style="font-size: 3rem; opacity: 0.3;"></i>
                                        </div>
                                    </div>
                                    <div class="card-body text-primary">
                                        <div class="testimonial-content">
                                            <p class="mb-4 card-text">
                                                DeptHub's notification system keeps everyone informed instantly. Faculty feedback has improved dramatically, and administrative overhead has decreased by 40%.
                                            </p>
                                            <div class="testimonial-author">
                                                <div class="author-avatar">
                                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face" alt="Prof. Anjali Patel" class="rounded-circle img-fluid">
                                                </div>
                                                <div class="author-info ms-3">
                                                    <h6 class="text-white mb-0">Prof. Anjali Patel</h6>
                                                    <small class="text-light opacity-75">Dean of Academics<br>Gauhati University</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- Modern Contact Section -->
    <section class="modern-contact min-vh-100 d-flex align-items-center" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                        <div class="section-badge mx-auto mb-3">
                            <span class="badge modern-badge">
                                <i class="bi bi-envelope me-2"></i>Get in Touch
                            </span>
                        </div>
                        <h2 class="display-5 fw-bold text-white mb-4">Ready to Transform Your Department?</h2>
                        <p class="text-light opacity-75 mx-auto" style="max-width: 600px;">
                            Contact us today for a personalized demo and see how DeptHub can revolutionize your institution
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="contact-info h-100">
                        <div class="info-card mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="info-icon mb-3">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <h5 class="text-white mb-3">Visit Our Office</h5>
                            <p class="text-light opacity-75 mb-0">
                                123 Education Street<br>
                                Academic City, AC 12345<br>
                                United States
                            </p>
                        </div>

                        <div class="info-card mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="info-icon mb-3">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <h5 class="text-white mb-3">Call Us</h5>
                            <p class="text-light opacity-75 mb-0">
                                Main: +1 (555) 123-4567<br>
                                Support: +1 (555) 987-6543
                            </p>
                        </div>

                        <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="info-icon mb-3">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <h5 class="text-white mb-3">Email Us</h5>
                            <p class="text-light opacity-75 mb-0">
                                General: info@depthub.com<br>
                                Support: support@depthub.com
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="contact-form-wrapper">
                        <form id="contactForm" class="modern-contact-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control modern-input" id="contactName" placeholder="Full Name" required>
                                        <label for="contactName">
                                            <i class="bi bi-person me-2"></i>Full Name *
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control modern-input" id="contactEmail" placeholder="Email" required>
                                        <label for="contactEmail">
                                            <i class="bi bi-envelope me-2"></i>Email Address *
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control modern-input" id="contactPhone" placeholder="Phone">
                                        <label for="contactPhone">
                                            <i class="bi bi-telephone me-2"></i>Phone Number
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control modern-input" id="contactInstitution" placeholder="Institution">
                                        <label for="contactInstitution">
                                            <i class="bi bi-building me-2"></i>Institution
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select modern-input" id="contactSubject" required>
                                            <option value="">Select a subject</option>
                                            <option value="demo">Request a Demo</option>
                                            <option value="pricing">Pricing Information</option>
                                            <option value="support">Technical Support</option>
                                            <option value="partnership">Partnership Opportunities</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <label for="contactSubject">
                                            <i class="bi bi-chat-dots me-2"></i>Subject *
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control modern-input" id="contactMessage" placeholder="Message" style="height: 120px;" required></textarea>
                                        <label for="contactMessage">
                                            <i class="bi bi-chat-text me-2"></i>Your Message *
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-3">
                                        <input type="checkbox" class="form-check-input modern-checkbox" id="contactConsent" required>
                                        <label class="form-check-label text-light opacity-75" for="contactConsent">
                                            I agree to be contacted by DeptHub regarding my inquiry and understand that my information will be processed in accordance with the privacy policy.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn modern-submit-btn-enhanced w-100 text-light">
                                        <span class="btn-content">
                                            <i class="bi bi-send me-2"></i>
                                            <span class="btn-text">Send Message</span>
                                        </span>
                                        <span class="btn-loading" style="display: none;">
                                            <i class="bi bi-hourglass-split me-2"></i>
                                            <span>Sending...</span>
                                        </span>
                                    </button>
                                    <div id="formStatus" class="mt-3"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Modern Registration Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content modern-modal">
            <div class="modal-header modern-modal-header border-0">
                <div class="modal-title-section">
                    <div class="modal-icon mb-2">
                        <i class="bi bi-person-fill-add"></i>
                    </div>
                    <h3 class="modal-title" id="registerModalLabel">Join <span>DeptHub</span></h3>
                    <p class="text-dark opacity-75 mb-0">Start your educational journey today</p>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body modern-modal-body">
                <!-- User Type Selector -->
                <div class="user-type-selector mb-4">
                    <div class="btn-group w-100" role="group" style="gap: 2px;">
                        <input type="radio" class="btn-check" name="userType" id="studentRadio" autocomplete="off" checked>
                        <label class="btn modern-user-type-btn active" for="studentRadio">
                            <i class="bi bi-mortarboard me-2"></i>Student
                        </label>

                        <input type="radio" class="btn-check" name="userType" id="teacherRadio" autocomplete="off">
                        <label class="btn modern-user-type-btn" for="teacherRadio">
                            <i class="bi bi-chalkboard me-2"></i>Teacher
                        </label>
                    </div>
                </div>
      
                <!-- Student Registration Form -->
                <div id="studentForm" class="user-form active">
                    <form id="studentRegistrationForm" class="modern-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control modern-input" id="studentName" placeholder="Full Name" required>
                                    <label for="studentName">
                                        <i class="bi bi-person me-2"></i>Full Name
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control modern-input" id="studentEmail" placeholder="Email" required>
                                    <label for="studentEmail">
                                        <i class="bi bi-envelope me-2"></i>Email Address
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control modern-input" id="studentPhone" placeholder="Phone Number" required>
                                    <label for="studentPhone">
                                        <i class="bi bi-telephone me-2"></i>Phone Number
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control modern-input" id="enrollmentNumber" placeholder="Enrollment Number" required>
                                    <label for="enrollmentNumber">
                                        <i class="bi bi-card-text me-2"></i>Enrollment Number
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control modern-input" id="studentInstitution" placeholder="Institution Name" required>
                                    <label for="studentInstitution">
                                        <i class="bi bi-building me-2"></i>Institution Name
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control modern-input" id="studentPassword" placeholder="Password" required>
                                    <label for="studentPassword">
                                        <i class="bi bi-lock me-2"></i>Password
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control modern-input" id="studentConfirmPassword" placeholder="Confirm Password" required>
                                    <label for="studentConfirmPassword">
                                        <i class="bi bi-lock-fill me-2"></i>Confirm Password
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Teacher Registration Form -->
                <div id="teacherForm" class="user-form" style="display: none;">
                    <form id="teacherRegistrationForm" class="modern-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control modern-input" id="teacherName" placeholder="Full Name" required>
                                    <label for="teacherName">
                                        <i class="bi bi-person me-2"></i>Full Name
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control modern-input" id="teacherEmail" placeholder="Email" required>
                                    <label for="teacherEmail">
                                        <i class="bi bi-envelope me-2"></i>Email Address
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control modern-input" id="teacherPhone" placeholder="Phone Number" required>
                                    <label for="teacherPhone">
                                        <i class="bi bi-telephone me-2"></i>Phone Number
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control modern-input" id="employeeId" placeholder="Employee ID" required>
                                    <label for="employeeId">
                                        <i class="bi bi-badge me-2"></i>Employee ID
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control modern-input" id="teacherInstitution" placeholder="Institution Name" required>
                                    <label for="teacherInstitution">
                                        <i class="bi bi-building me-2"></i>Institution Name
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select modern-input" id="department" required>
                                        <option value="">Select Department</option>
                                        <option value="computer-science">Computer Science</option>
                                        <option value="mathematics">Mathematics</option>
                                        <option value="physics">Physics</option>
                                        <option value="chemistry">Chemistry</option>
                                        <option value="biology">Biology</option>
                                        <option value="english">English</option>
                                        <option value="history">History</option>
                                        <option value="economics">Economics</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <label for="department">
                                        <i class="bi bi-diagram-3 me-2"></i>Department
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control modern-input" id="teacherPassword" placeholder="Password" required>
                                    <label for="teacherPassword">
                                        <i class="bi bi-lock me-2"></i>Password
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control modern-input" id="teacherConfirmPassword" placeholder="Confirm Password" required>
                                    <label for="teacherConfirmPassword">
                                        <i class="bi bi-lock-fill me-2"></i>Confirm Password
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="form-check mt-3 px-5">
                <input class="form-check-input modern-checkbox" type="checkbox" id="termsCheck" required>
                <label class="form-check-label text-dark" for="termsCheck">
                    I agree to <a href="#" class="text-decoration-none">Terms & Conditions</a> and <a href="#" class="text-decoration-none">Privacy Policy</a>
                </label>
            </div>

            <div class="d-grid px-4 py-4">
                <button type="button" class="btn modern-submit-btn text-light py-2" onclick="handleRegistration()">
                    <i class="bi bi-rocket-takeoff me-2"></i>Create Account
                </button>
            </div>

            <!-- Success Message (Hidden by default) -->
            <div id="registrationSuccess" class="alert alert-success mt-3" style="display: none;">
                <i class="bi bi-check-circle me-2"></i>
                <strong>Registration Successful!</strong><br>
                <span id="loginInfo"></span>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Modern Login Modal -->
<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modern-modal">
            <div class="modal-header modern-modal-header border-0">
                <div class="modal-title-section">
                    <div class="modal-icon mb-2">
                        <i class="bi bi-box-arrow-in-right"></i>
                    </div>
                    <h3 class="modal-title" id="studentModalLabel">Welcome Back</h3>
                    <p class="text-dark opacity-75 mb-0">Sign in to access your dashboard</p>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modern-modal-body">
                <form id="loginForm" class="modern-form">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="email" class="form-control modern-input" id="loginEmail" placeholder="Email" required>
                            <label for="loginEmail">
                                <i class="bi bi-envelope me-2"></i>Email Address
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="password" class="form-control modern-input" id="loginPassword" placeholder="Password" required>
                            <label for="loginPassword">
                                <i class="bi bi-lock me-2"></i>Password
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input class="form-check-input modern-checkbox" type="checkbox" id="rememberMe">
                            <label class="form-check-label text-dark" for="rememberMe">
                                Remember me
                            </label>
                        </div>
                        <a href="#" class="text-decoration-none">Forgot password?</a>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn modern-submit-btn text-light">
                            <i class="bi bi-door-open me-2"></i>Sign In
                        </button>
                    </div>
                    <div class="text-center mt-3">
                        <p class="text-dark opacity-75">
                            Don't have an account?
                            <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#registerModal">Sign up</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . '/includes/footer.php'; ?>