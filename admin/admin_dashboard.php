
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>SMS - Admin Dashboard</title>

<!-- Bootstrap & Font Awesome -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

<style>
:root {
    --primary-green: #509d81ff;
    --light-bg: #f2f7f3ff;
    --card-bg: #ffffff;
    --text-main: #1f2937;
    --text-muted: #6b7280;
}

body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background-color: var(--light-bg);
    color: var(--text-main);
}

.main-content { padding: 2rem 2%; }

.topbar p { margin: 0; font-size: 0.95rem; color: var(--text-muted); }
.topbar h1 { font-weight: 700; color: var(--text-main); margin: 0; font-size: 2.3rem; }

.card-box {
    background: var(--card-bg);
    border-radius: 12px;
    padding: 1.2rem;
    border: 1px solid rgba(226, 232, 240, 0.8);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    height: 100%;
}

.stat-card {
    padding: 0.8rem 1rem;
    border-radius: 12px;
    height: auto;
}

.stat-card h6 { font-size: 0.9rem; font-weight: 500; margin-bottom: 0.3rem; }
.stat-card h3 { font-size: 1.4rem; font-weight: 700; margin-bottom: 0.3rem; }

.stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 1rem;
}

/* Table */
.table thead th {
    background-color: var(--primary-green);
    color: white;
    font-weight: 600;
}
.table tbody tr:hover { background-color: #dcfce7; }
.table tbody td { color: var(--text-main); }

.badge-success { background-color: var(--primary-green); }
.badge-secondary { background-color: #86efac; }

/* Chart */
.chart-area {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-end;
    justify-content: space-around;
    height: 120px;
    border-bottom: 2px solid #cbd5e1;
    padding-bottom: 5px;
}
.bar-container {
    flex: 1 1 30px;
    margin: 0 3px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
    height: 100%;
}
.bar {
    width: 50%;
    max-height: 100%;
    border-radius: 4px 4px 0 0;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    font-size: 9px;
    padding: 0;
    background-color: var(--primary-green);
}
.bar-value { color: #fff; }
.bar-label { text-align: center; margin-top: 8px; font-size: 11px; font-weight: 600; color: var(--text-muted); }

/* Responsive adjustments */
@media(max-width:1200px){
  .stats-grid { grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); }
  .bar { width: 60%; }
}

</style>
</head>

<body>
    <?php include 'admin_menu.php'; ?>

<div class="main-content">
  <!-- Topbar -->
  <div class="topbar mb-4">
    <p class="mb-1">Welcome back, Admin!</p>
    <h1 class="mt-0">Admin Overview</h1>
  </div>

  <!-- Stats Grid -->
  <div class="stats-grid mb-4">
    <div class="stat-col">
      <div class="card-box stat-card" style="border-top-color: #2563eb;">
        <div class="d-flex align-items-center gap-2 mb-2">
          <i class="fas fa-users fa-lg" style="color:#2563eb;"></i>
          <h6 class="mb-0">Total Users</h6>
        </div>
        <h3 class="mb-2">120</h3>
      </div>
    </div>
    <div class="stat-col">
      <div class="card-box stat-card" style="border-top-color: #ef4444;">
        <div class="d-flex align-items-center gap-2 mb-2">
          <i class="fas fa-book-open fa-lg" style="color:#ef4444;"></i>
          <h6 class="mb-0">Courses</h6>
        </div>
        <h3 class="mb-2">25</h3>
      </div>
    </div>
    <div class="stat-col">
      <div class="card-box stat-card" style="border-top-color: #f59e0b;">
        <div class="d-flex align-items-center gap-2 mb-2">
          <i class="fas fa-file-alt fa-lg" style="color:#f59e0b;"></i>
          <h6 class="mb-0">Assignments</h6>
        </div>
        <h3 class="mb-2">78</h3>
      </div>
    </div>
    <div class="stat-col">
      <div class="card-box stat-card" style="border-top-color: #1e3a8a;">
        <div class="d-flex align-items-center gap-2 mb-2">
          <i class="fas fa-chart-line fa-lg" style="color:#1e3a8a;"></i>
          <h6 class="mb-0">Active Reports</h6>
        </div>
        <h3 class="mb-2">12</h3>
      </div>
    </div>
  </div>

  <!-- Recent Users Table -->
  <div class="card-box mb-4">
    <div class="d-flex justify-content-between align-items-center mb-2">
      <h6 class="m-0">Recent Users</h6>
      <a href="#" class="text-primary text-decoration-none fw-bold small">View All Users</a>
    </div>
    <div class="table-responsive">
      <table class="table table-hover mb-0">
        <thead>
          <tr>
            <th>#</th><th>Name</th><th>Email</th><th>Role</th><th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>1</td><td>Sweni Roy</td><td>sweni@example.com</td><td>Student</td><td><span class="badge badge-success">Active</span></td></tr>
          <tr><td>2</td><td>Alan Turing</td><td>alan@example.com</td><td>Professor</td><td><span class="badge badge-secondary">Inactive</span></td></tr>
          <tr><td>3</td><td>Sarah Jenkins</td><td>sarah@example.com</td><td>Professor</td><td><span class="badge badge-success">Active</span></td></tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Performance Graph -->
  <div class="card-box">
    <h6>Course Performance Trend</h6>
    <div class="chart-area">
      <div class="bar-container"><div class="bar" style="height: 70%;"><span class="bar-value">70%</span></div><div class="bar-label">Math</div></div>
      <div class="bar-container"><div class="bar" style="height: 85%;"><span class="bar-value">85%</span></div><div class="bar-label">Physics</div></div>
      <div class="bar-container"><div class="bar" style="height: 65%;"><span class="bar-value">65%</span></div><div class="bar-label">DS</div></div>
      <div class="bar-container"><div class="bar" style="height: 95%;"><span class="bar-value">95%</span></div><div class="bar-label">AI</div></div>
    </div>
  </div>

</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
