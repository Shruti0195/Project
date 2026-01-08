<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Student Navbar</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
<link href="style/stud_menu.css" rel="stylesheet"/>
<link href="style/student_dash.css" rel="stylesheet"/>

</head>

<body>


<?php include 'student_menu.php';?>

<div class="main-content">
  <div class="topbar mb-4">
  <p class="text-muted mb-1">Welcome back, Student!</p>
  <h1 class="mt-0">Student Overview</h1>
</div>


  <!-- ANNOUNCEMENTS -->
  <div class="announcement-container">
    <div class="announcement-item">
      <i class="fas fa-bullhorn me-3 text-primary"></i>
      <span><strong>Notice:</strong> Mid-term exams start next Monday. Please check your schedule.</span>
    </div>
    <div class="announcement-item" style="border-left-color: #f59e0b;">
      <i class="fas fa-clock me-3 text-warning"></i>
      <span><strong>Deadline:</strong> Physics assignment is due this Friday by 11:59 PM.</span>
    </div>
  </div>

  
  <!-- <style>
/* Make stat cards wider */
.wide-card {
  flex: 0 0 calc(20% - 8px); /* 5 cards in one row with small gap */
  max-width: calc(20% - 8px);
}
</style> -->

<!-- STATS ROW WITH ICONS (Wider Cards, Smaller Gaps) -->
<div class="stats-grid mb-4">

  <div class="stat-col">
  <div class="card-box stat-card h-100">
      <div class="d-flex align-items-center gap-2 mb-2">
        <i class="fas fa-wallet fa-lg" style="color:#ef4444;"></i>
        <h6 class="mb-0">Pending Fees</h6>
      </div>
      <h4 class="mb-2"> &#8377;1200</h4>
      <div class="progress"><div class="progress-bar" role="progressbar" style="width: 60%; background-color: #ef4444;"></div></div>
      <small class="text-muted">60% Paid</small>
    </div>
  </div>

  <!-- Courses -->
<div class="stat-col">
  <div class="card-box stat-card h-100">
      <div class="d-flex align-items-center gap-2 mb-2">
        <i class="fas fa-book-open fa-lg" style="color:#2563eb;"></i>
        <h6 class="mb-0">Courses</h6>
      </div>
      <h4 class="mb-2">06</h4>
      <div class="progress"><div class="progress-bar bg-primary" role="progressbar" style="width: 100%;"></div></div>
      <small class="text-muted">All active</small>
    </div>
  </div>

  <!-- Attendance -->
<div class="stat-col">
  <div class="card-box stat-card h-100">
      <div class="d-flex align-items-center gap-2 mb-2">
        <i class="fas fa-calendar-check fa-lg" style="color:#06b6d4;"></i>
        <h6 class="mb-0">Attendance</h6>
      </div>
      <h4 class="mb-2">92.4%</h4>
      <div class="progress"><div class="progress-bar bg-info" role="progressbar" style="width: 92.4%;"></div></div>
      <small class="text-muted">Current record</small>
    </div>
  </div>

  <!-- Tasks -->
<div class="stat-col">
  <div class="card-box stat-card h-100">
      <div class="d-flex align-items-center gap-2 mb-2">
        <i class="fas fa-tasks fa-lg" style="color:#f59e0b;"></i>
        <h6 class="mb-0">Tasks</h6>
      </div>
      <h4 class="mb-2">03</h4>
      <div class="progress"><div class="progress-bar bg-warning" role="progressbar" style="width: 60%;"></div></div>
      <small class="text-muted">60% completed</small>
    </div>
  </div>

  <!-- GPA -->
<div class="stat-col">
  <div class="card-box stat-card h-100">
      <div class="d-flex align-items-center gap-2 mb-2">
        <i class="fas fa-chart-line fa-lg" style="color:#1e3a8a;"></i>
        <h6 class="mb-0">GPA</h6>
      </div>
      <h4 class="mb-2">8.62</h4>
      <div class="progress"><div class="progress-bar bg-success" role="progressbar" style="width: 86%;"></div></div>
      <small class="text-muted">Current term</small>
    </div>
  </div>

</div>


  <!-- SCHEDULE -->
  <div class="card-box mb-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h6 class="m-0">Today's Schedule</h6>
      <a href="#" class="text-primary text-decoration-none fw-bold small">View Full Schedule</a>
    </div>

    <div class="schedule-item">
      <div class="schedule-time">09:00 AM</div>
      <div class="schedule-details">
        <div class="schedule-subject">Advanced Mathematics</div>
        <div class="schedule-meta">Room 204 · Prof. Sarah Jenkins</div>
      </div>
      <i class="fas fa-book schedule-icon" data-bs-toggle="tooltip" title="Course Material"></i>
    </div>

    <div class="schedule-item">
      <div class="schedule-time">11:00 AM</div>
      <div class="schedule-details">
        <div class="schedule-subject">Quantum Physics</div>
        <div class="schedule-meta">Lab 3 · Dr. Robert Lang</div>
      </div>
      <i class="fas fa-atom schedule-icon" data-bs-toggle="tooltip" title="Lab Session"></i>
    </div>

    <div class="schedule-item">
      <div class="schedule-time">02:00 PM</div>
      <div class="schedule-details">
        <div class="schedule-subject">Data Structures</div>
        <div class="schedule-meta">Room 118 · Prof. Alan Turing</div>
      </div>
      <i class="fas fa-code schedule-icon" data-bs-toggle="tooltip" title="Practical Class"></i>
    </div>
  </div>

  <!-- UPCOMING EVENTS -->
  <div class="card-box mb-4">
    <h6>Upcoming Events</h6>
    <ul class="list-unstyled mb-0">
      <li>📌 Math Quiz - Tomorrow</li>
      <li>📌 Physics Lab Report - Friday</li>
      <li>📌 Submit History Essay - Next Monday</li>
    </ul>
  </div>

  <!-- ENROLLMENT & PERFORMANCE GRAPH -->
  <div class="row g-4">
    <div class="col-lg-6">
      <div class="card-box">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <h6 class="m-0">Current Enrollment</h6>
          <a href="#" class="text-primary text-decoration-none fw-bold small">View All</a>
        </div>
        
        <div class="course-item">
          <div><span class="course-name">Advanced Mathematics</span><br><span class="prof-name">Prof. Sarah Jenkins</span></div>
          <i class="fas fa-chevron-right text-light"></i>
        </div>
        <div class="course-item">
          <div><span class="course-name">Quantum Physics</span><br><span class="prof-name">Dr. Robert Lang</span></div>
          <i class="fas fa-chevron-right text-light"></i>
        </div>
        <div class="course-item">
          <div><span class="course-name">Data Structures</span><br><span class="prof-name">Prof. Alan Turing</span></div>
          <i class="fas fa-chevron-right text-light"></i>
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="card-box">
        <h6>Performance Trend</h6>
        <div class="chart-area">
          <div class="bar-container"><div class="bar" style="height: 70%;"><span class="bar-value">7.8</span></div><div class="bar-label">SEM 1</div></div>
          <div class="bar-container"><div class="bar" style="height: 85%;"><span class="bar-value">8.2</span></div><div class="bar-label">SEM 2</div></div>
          <div class="bar-container"><div class="bar" style="height: 65%;"><span class="bar-value">7.5</span></div><div class="bar-label">SEM 3</div></div>
          <div class="bar-container"><div class="bar" style="height: 95%;"><span class="bar-value">9.0</span></div><div class="bar-label">SEM 4</div></div>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const collapseEl = document.querySelector('.navbar-collapse');
  const breakpoint = 992; // Bootstrap lg breakpoint

  collapseEl.addEventListener('show.bs.collapse', function () {
    if (window.innerWidth < breakpoint) {
      collapseEl.style.height = collapseEl.scrollHeight + 'px';
    }
  });

  collapseEl.addEventListener('shown.bs.collapse', function () {
    if (window.innerWidth < breakpoint) {
      collapseEl.style.height = 'auto';
    }
  });

  collapseEl.addEventListener('hide.bs.collapse', function () {
    if (window.innerWidth < breakpoint) {
      const scrollHeight = collapseEl.scrollHeight;
      collapseEl.style.height = scrollHeight + 'px';
      collapseEl.offsetHeight; // trigger reflow
    }
  });

  collapseEl.addEventListener('hidden.bs.collapse', function () {
    if (window.innerWidth < breakpoint) {
      collapseEl.style.height = '';
    }
  });

  // Optional: reset height on window resize to prevent broken state
  window.addEventListener('resize', function () {
    if (window.innerWidth >= breakpoint) {
      collapseEl.style.height = '';
    }
  });
});
</script>

</body>
</html>
