<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>SMS - Faculty Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

<style>
:root {
  --primary-purple: #5d358dff;
  --dark-purple: #54336fff;
  --light-bg: #f9f8fcff;
  --card-bg: #ffffff;
  --text-main: #1f2937;
  --text-muted: #6b7280;
  --accent-purple: #a78bfa;
}

/* BODY */
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background-color: var(--light-bg);
  color: var(--text-main);
  font-size: 0.95rem;
  line-height: 1.5;
}

/* MAIN CONTENT */
.main-content {
  padding: 2rem 2%;
}

/* HEADING & WELCOME */
.topbar h1 {
  font-weight:700;
  font-size:2.3rem;
  color: var(--text-main);
  margin-bottom:0.3rem;
}
.topbar p {
  font-weight:400;
  font-size: 0.95rem;
  color: var(--text-muted);
  margin-bottom:1.5rem;
}

/* REMINDERS */
.reminders {
  background: #fff;
  padding: 0.8rem 2%;
  color: var(--dark-purple);
  border-left: 4px solid var(--primary-purple);
  margin-bottom: 1.5rem;
  border-radius: 6px;
}

/* CARDS */
.card-box {
  background: var(--card-bg);
  border-radius: 12px;
  padding: 1.2rem;
  border: 1px solid #e2e8f0;
  box-shadow: 0 4px 6px rgba(0,0,0,0.05);
}

/* STAT CARDS */
.stat-card { border-top: 4px solid var(--accent-purple); }
.stat-card h6 { font-weight:500; font-size:0.9rem; margin-bottom:0.3rem; }
.stat-card h3 { font-weight:700; font-size:1.4rem; margin-bottom:0.3rem; }

/* SCHEDULE ITEMS */
.schedule-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.8rem 0;
  border-bottom: 1px solid #e2e8f0;
}
.schedule-item:last-child { border-bottom: none; }
.time { font-weight:600; color: var(--primary-purple); min-width:90px; }
.subject { font-weight:600; color: var(--text-main); }
.class { font-size:0.85rem; color: var(--text-muted); }
.schedule-item i { color: var(--accent-purple); }

/* PENDING TASKS */
.pending-tasks li { margin-bottom:0.5rem; }
</style>
</head>

<body>
    <?php include 'faculty_menu.php'; ?>

<div class="main-content">

  <div class="topbar mb-4">
    <p class="text-muted mb-1">Welcome back, Mr.shah!</p>
    <h1 class="mt-0">Faculty Overview</h1>
  </div>

  <!-- REMINDERS -->
  <div class="reminders">
    🔔 Don't forget to submit lecture notes and mark attendance for today.
  </div>

  <!-- STATS -->
  <div class="row g-3 mb-4">
    <div class="col-md-3">
      <div class="card-box stat-card">
        <h6>Subjects</h6>
        <h3>04</h3>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-box stat-card" style="border-top-color:#b491f5;">
        <h6>Classes</h6>
        <h3>06</h3>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-box stat-card" style="border-top-color:#c3a5f7;">
        <h6>Students</h6>
        <h3>180</h3>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-box stat-card" style="border-top-color:#c8a2f7;">
        <h6>Lectures Today</h6>
        <h3>03</h3>
      </div>
    </div>
  </div>

  <!-- SINGLE ROW FOR CARDS -->
  <div class="row g-4">

    <!-- LEFT COLUMN -->
    <div class="col-lg-6">
      <!-- ASSIGNED SUBJECTS CARD -->
      <div class="card-box mb-3">
        <h6 class="mb-3">Assigned Subjects</h6>

        <p class="fw-semibold mb-1">Data Structures</p>
        <p class="text-muted small">BSc CS · Semester 3</p>

        <p class="fw-semibold mb-1 mt-3">Machine Learning</p>
        <p class="text-muted small">MSc CS · Semester 2</p>

        <p class="fw-semibold mb-1 mt-3">Database Systems</p>
        <p class="text-muted small">BCA · Semester 4</p>
      </div>

      <!-- PENDING TASKS CARD -->
      <div class="card-box">
        <h6 class="mb-3">Pending Tasks</h6>
        <ul class="list-unstyled pending-tasks mb-0">
          <li>📌 Prepare slides for Machine Learning lecture</li>
          <li>📌 Mark attendance for BSc CS</li>
          <li>📌 Review assignment submissions for Database Systems</li>
          <li>📌 Schedule lab session for next week</li>
        </ul>
      </div>
    </div>

    <!-- RIGHT COLUMN -->
    <div class="col-lg-6">
      <!-- TODAY'S TEACHING SCHEDULE -->
      <div class="card-box">
        <h6 class="mb-3">Today's Teaching Schedule</h6>

        <div class="schedule-item">
          <div class="time">09:00 AM</div>
          <div class="details">
            <div class="subject">Data Structures</div>
            <div class="class">BSc CS · Room 204</div>
          </div>
          <i class="fas fa-book"></i>
        </div>

        <div class="schedule-item">
          <div class="time">11:30 AM</div>
          <div class="details">
            <div class="subject">Machine Learning</div>
            <div class="class">MSc CS · Lab 2</div>
          </div>
          <i class="fas fa-laptop-code"></i>
        </div>

        <div class="schedule-item">
          <div class="time">02:00 PM</div>
          <div class="details">
            <div class="subject">Database Systems</div>
            <div class="class">BCA · Room 118</div>
          </div>
          <i class="fas fa-database"></i>
        </div>
      </div>
    </div>

  </div>
</div>

</body>
</html>
