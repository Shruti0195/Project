<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>SMS - Navbar</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
<link href="style/amenu.css" rel="stylesheet"/>
<link href="style/admin_dashboard.css" rel="stylesheet"/>

</head>
<body>
  <?php include 'admin_menu.php'?>
<div class="main-content">
  <!-- Topbar -->
  <div class="topbar mb-4">
    <p class="mb-1">Welcome back, Admin!</p>
    <h1 class="mt-0">Admin Overview</h1>
  </div>

  <!-- Stats Grid -->
  <div class="stats-grid mb-4">
    <div class="stat-col">
      <div class="card-box stat-card" style="border-top:4px solid #2563eb;">
        <div class="d-flex align-items-center gap-2 mb-2">
          <i class="fas fa-users fa-lg" style="color:#2563eb;"></i>
          <h6 class="mb-0">Total Users</h6>
        </div>
        <h3 class="mb-2">120</h3>
      </div>
    </div>
    <div class="stat-col">
      <div class="card-box stat-card" style="border-top:4px solid #ef4444;">
        <div class="d-flex align-items-center gap-2 mb-2">
          <i class="fas fa-book-open fa-lg" style="color:#ef4444;"></i>
          <h6 class="mb-0">Courses</h6>
        </div>
        <h3 class="mb-2">25</h3>
      </div>
    </div>
    <div class="stat-col">
      <div class="card-box stat-card" style="border-top:4px solid #f59e0b;">
        <div class="d-flex align-items-center gap-2 mb-2">
          <i class="fas fa-file-alt fa-lg" style="color:#f59e0b;"></i>
          <h6 class="mb-0">Assignments</h6>
        </div>
        <h3 class="mb-2">78</h3>
      </div>
    </div>
    <div class="stat-col">
      <div class="card-box stat-card" style="border-top:4px solid #1e3a8a;">
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

 
</div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>