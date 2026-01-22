document.addEventListener("DOMContentLoaded", () => {
  // Sidebar open/close
  function w3_open() {
    document.getElementById("main-content").style.marginLeft = "25%";
    const sidebar = document.getElementById("mySidebar");
    sidebar.style.width = "25%";
    sidebar.style.display = "block";
    document.getElementById("openNav").style.display = "none";
  }

  function w3_close() {
    document.getElementById("main-content").style.marginLeft = "0%";
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("openNav").style.display = "inline-block";
  }

  // Download timetable as PDF
  async function downloadTimetable() {
    const { jsPDF } = window.jspdf;

    const timetable = document.querySelector(".timetable");
    if (!timetable) {
      alert("Timetable not found!");
      return;
    }

    const canvas = await html2canvas(timetable, { scale: 2 });
    const imgData = canvas.toDataURL("image/png");

    const pdf = new jsPDF("p", "mm", "a4");
    const pdfWidth = pdf.internal.pageSize.getWidth();
    const pdfHeight = (canvas.height * pdfWidth) / canvas.width;

    pdf.addImage(imgData, "PNG", 0, 0, pdfWidth, pdfHeight);
    pdf.save("timetable.pdf");
  }

  // Attach small hover and click animations
  document.querySelectorAll(".timetable-table tbody tr").forEach((row) => {
    row.addEventListener(
      "mouseenter",
      () => (row.style.transform = "translateY(-2px)")
    );
    row.addEventListener(
      "mouseleave",
      () => (row.style.transform = "translateY(0)")
    );
  });

  document.querySelectorAll(".btn-custom").forEach((button) => {
    button.addEventListener("click", () => {
      button.style.transform = "scale(0.95)";
      setTimeout(() => (button.style.transform = "scale(1)"), 150);
    });
  });

  // Contact Form Handler
  const contactForm = document.getElementById("contactForm");
  const formStatus = document.getElementById("formStatus");

  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();

      // Show loading state
      const submitBtn = contactForm.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      submitBtn.innerHTML =
        '<i class="bx bx-loader-alt bx-spin me-2"></i>Sending...';
      submitBtn.disabled = true;

      // Simulate form submission (replace with actual API call)
      setTimeout(() => {
        // Show success message
        formStatus.innerHTML = `
          <div class="alert alert-success">
            <i class="bx bx-check-circle me-2"></i>
            Thank you for contacting us! We'll get back to you within 24 hours.
          </div>
        `;

        // Reset form
        contactForm.reset();
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;

        // Clear message after 5 seconds
        setTimeout(() => {
          formStatus.innerHTML = "";
        }, 5000);
      }, 2000);
    });
  }

  // Registration Modal Tab Switching
  const studentRadio = document.getElementById('studentRadio');
  const teacherRadio = document.getElementById('teacherRadio');
  const studentForm = document.getElementById('studentForm');
  const teacherForm = document.getElementById('teacherForm');
  const studentLabel = document.querySelector('label[for="studentRadio"]');
  const teacherLabel = document.querySelector('label[for="teacherRadio"]');

  // User type switching
  function switchUserType(userType) {
    // First hide both forms with animation
    studentForm.classList.remove('active');
    teacherForm.classList.remove('active');
    
    // Wait for fade out animation
    setTimeout(() => {
      if (userType === 'student') {
        studentForm.style.display = 'block';
        teacherForm.style.display = 'none';
        studentLabel.classList.add('active');
        teacherLabel.classList.remove('active');
        
        // Trigger reflow and add active class for smooth animation
        setTimeout(() => {
          studentForm.classList.add('active');
        }, 10);
      } else {
        studentForm.style.display = 'none';
        teacherForm.style.display = 'block';
        studentLabel.classList.remove('active');
        teacherLabel.classList.add('active');
        
        // Trigger reflow and add active class for smooth animation
        setTimeout(() => {
          teacherForm.classList.add('active');
        }, 10);
      }
    }, 300);
  }

  // Add event listeners for radio buttons
  if (studentRadio && teacherRadio) {
    studentRadio.addEventListener('change', () => switchUserType('student'));
    teacherRadio.addEventListener('change', () => switchUserType('teacher'));
    
    // Initialize with student form
    switchUserType('student');
  }

  // Handle registration submission
  window.handleRegistration = function() {
    const isStudent = studentRadio.checked;
    const successDiv = document.getElementById('registrationSuccess');
    const loginInfo = document.getElementById('loginInfo');
    
    // Validate terms checkbox
    const termsCheck = document.getElementById('termsCheck');
    if (!termsCheck.checked) {
      alert('Please agree to Terms & Conditions and Privacy Policy');
      return;
    }

    if (isStudent) {
      // Student validation
      const name = document.getElementById('studentName').value;
      const email = document.getElementById('studentEmail').value;
      const phone = document.getElementById('studentPhone').value;
      const enrollment = document.getElementById('enrollmentNumber').value;
      const institution = document.getElementById('studentInstitution').value;
      const password = document.getElementById('studentPassword').value;
      const confirmPassword = document.getElementById('studentConfirmPassword').value;

      // Basic validation
      if (!name || !email || !phone || !enrollment || !institution || !password) {
        alert('Please fill in all required fields');
        return;
      }

      if (password !== confirmPassword) {
        alert('Passwords do not match');
        return;
      }

      if (password.length < 6) {
        alert('Password must be at least 6 characters long');
        return;
      }

      // Show success message
      loginInfo.innerHTML = `Use <strong>${email}</strong> or <strong>${enrollment}</strong> to login to your account.`;
      
    } else {
      // Teacher validation
      const name = document.getElementById('teacherName').value;
      const email = document.getElementById('teacherEmail').value;
      const phone = document.getElementById('teacherPhone').value;
      const employeeId = document.getElementById('employeeId').value;
      const institution = document.getElementById('teacherInstitution').value;
      const department = document.getElementById('department').value;
      const password = document.getElementById('teacherPassword').value;
      const confirmPassword = document.getElementById('teacherConfirmPassword').value;

      // Basic validation
      if (!name || !email || !phone || !employeeId || !institution || !department || !password) {
        alert('Please fill in all required fields');
        return;
      }

      if (password !== confirmPassword) {
        alert('Passwords do not match');
        return;
      }

      if (password.length < 6) {
        alert('Password must be at least 6 characters long');
        return;
      }

      // Show success message
      loginInfo.innerHTML = `Use <strong>${email}</strong> or <strong>${employeeId}</strong> to login to your account.`;
    }

    // Show success message
    successDiv.style.display = 'block';
    
    // Reset forms after 3 seconds
    setTimeout(() => {
      // Reset form
      if (isStudent) {
        document.getElementById('studentRegistrationForm').reset();
      } else {
        document.getElementById('teacherRegistrationForm').reset();
      }
      
      // Hide success message
      successDiv.style.display = 'none';
      
      // Close modal
      const modal = bootstrap.Modal.getInstance(document.getElementById('registerModal'));
      if (modal) {
        modal.hide();
      }
    }, 3000);
  };

  // Format phone numbers
  function formatPhoneNumber(input) {
    let value = input.value.replace(/\D/g, '');
    if (value.length > 0) {
      if (value.length <= 3) {
        value = value;
      } else if (value.length <= 6) {
        value = value.slice(0, 3) + '-' + value.slice(3);
      } else {
        value = value.slice(0, 3) + '-' + value.slice(3, 6) + '-' + value.slice(6, 10);
      }
    }
    input.value = value;
  }

  // Add phone formatting to phone inputs
  const phoneInputs = document.querySelectorAll('input[type="tel"]');
  phoneInputs.forEach(input => {
    input.addEventListener('input', () => formatPhoneNumber(input));
  });

  // Password strength indicator
  function checkPasswordStrength(password) {
    let strength = 0;
    if (password.length >= 8) strength++;
    if (password.length >= 12) strength++;
    if (/[a-z]/.test(password)) strength++;
    if (/[A-Z]/.test(password)) strength++;
    if (/[0-9]/.test(password)) strength++;
    if (/[^a-zA-Z0-9]/.test(password)) strength++;
    return strength;
  }

  // Add password strength checking
  const passwordInputs = document.querySelectorAll('input[type="password"]');
  passwordInputs.forEach(input => {
    input.addEventListener('input', function() {
      const strength = checkPasswordStrength(this.value);
      // You can add visual feedback here if needed
    });
  });

  // User type selection for get started page
  window.gsSelectUserType = function(userType) {
    // Set user type in registration modal
    const studentRadio = document.getElementById('studentRadio');
    const teacherRadio = document.getElementById('teacherRadio');
    
    if (userType === 'student') {
      studentRadio.checked = true;
      studentRadio.dispatchEvent(new Event('change'));
    } else {
      teacherRadio.checked = true;
      teacherRadio.dispatchEvent(new Event('change'));
    }
    
    // Open registration modal
    if (typeof bootstrap !== 'undefined') {
      const registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
      registerModal.show();
    }
    
    // Redirect to main page with modal
    setTimeout(() => {
      window.location.href = 'index.php#registerModal';
    }, 100);
  };

  // Carousel next function for get-started page
  window.carouselNext = function() {
    const carousel = bootstrap.Carousel.getInstance(document.getElementById('getStartedCarousel'));
    if (carousel) {
      carousel.next();
    }
  };

  // Initialize AOS if library is available
  if (typeof AOS !== 'undefined') {
    AOS.init({
      once: true,
      duration: 1000,
      easing: 'ease-out-cubic'
    });
  }

  // Navigation link active state handling
  let navLinks = document.querySelectorAll("header nav .navbar-nav .nav-item .nav-link");
  let sections = document.querySelectorAll("section");

  window.onscroll = () => {
    sections.forEach((section) => {
      let top = window.scrollY;
      let offset = section.offsetTop - 150;
      let height = section.offsetHeight;
      let id = section.getAttribute("id");

      if (top >= offset && top < offset + height) {
        navLinks.forEach((links) => {
          links.classList.remove("active");
          document
            .querySelector("header nav .navbar-nav .nav-item .nav-link[href*=" + id + "]")
            ?.classList.add("active");
        });
      }
    });
  };

  // Save Attendance button event
  const saveBtn = document.getElementById("saveAttendanceBtn");
  if (saveBtn) {
    saveBtn.addEventListener("click", () => {
      const attendanceData = [];
      const subjectId = document.getElementById("subject_id")?.value || null;

      document.querySelectorAll(".attendance-row").forEach((row) => {
        const studentId = row.dataset.studentId;
        const radios = document.querySelectorAll(
          `input[name="status_${studentId}"]`
        );
        let status = null;
        radios.forEach((radio) => {
          if (radio.checked) status = radio.value;
        });
        if (status) {
          attendanceData.push({
            student_id: studentId,
            subject_id: subjectId,
            status: status,
          });
        }
      });

      if (attendanceData.length === 0) {
        alert("Please mark at least one attendance.");
        return;
      }

      fetch("../teacher/save_attendance.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(attendanceData),
      })
        .then((response) => {
          if (!response.ok) throw new Error("Network response was not OK");
          return response.json();
        })
        .then((data) => {
          if (data.success) {
            attendanceData.forEach((item) => {
              const badge = document.getElementById(
                "status-" + item.student_id
              );
              if (badge) {
                badge.textContent =
                  item.status.charAt(0).toUpperCase() + item.status.slice(1);
                badge.className =
                  "badge " +
                  (item.status === "present" ? "bg-success" : "bg-danger");
              }
            });
            alert(data.message);
          } else {
            alert("Error: " + data.message);
          }
        })
        .catch(() => alert("AJAX error! Network or server issue."));
    });
  }

  window.w3_open = w3_open;
  window.w3_close = w3_close;
  window.downloadTimetable = downloadTimetable;
});