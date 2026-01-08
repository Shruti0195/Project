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
<link href="style/stud_payment.css" rel="stylesheet"/>

</head>

<body>


<?php include 'student_menu.php'; ?>

<div class="main-content">

  <!-- TOP BAR -->
  <div class="topbar mb-4">
    <p class="text-muted mb-1">Student Portal</p>
    <h1 class="mt-0">Payment Details</h1>
  </div>

  <!-- PAYMENT SUMMARY -->
  <div class="stats-grid mb-4">

    <!-- Total Fees -->
    <div class="stat-col">
      <div class="card-box stat-card h-100">
        <div class="d-flex align-items-center gap-2 mb-2">
          <i class="fas fa-wallet fa-lg" style="color:#2563eb;"></i>
          <h6 class="mb-0">Total Fees</h6>
        </div>
        <h4 class="mb-2">&#8377; 20,000</h4>
        <small class="text-muted">For current academic year</small>
      </div>
    </div>

    <!-- Paid Amount -->
    <div class="stat-col">
      <div class="card-box stat-card h-100">
        <div class="d-flex align-items-center gap-2 mb-2">
          <i class="fas fa-check-circle fa-lg" style="color:#16a34a;"></i>
          <h6 class="mb-0">Paid</h6>
        </div>
        <h4 class="mb-2">&#8377; 12,000</h4>
        <div class="progress">
          <div class="progress-bar bg-success" style="width:60%;"></div>
        </div>
        <small class="text-muted">60% completed</small>
      </div>
    </div>

    <!-- Pending Fees -->
    <div class="stat-col">
      <div class="card-box stat-card h-100">
        <div class="d-flex align-items-center gap-2 mb-2">
          <i class="fas fa-coins fa-lg" style="color:#ef4444;"></i>
          <h6 class="mb-0">Pending</h6>
        </div>
        <h4 class="mb-2">&#8377; 8,000</h4>
        <div class="progress">
          <div class="progress-bar" style="width:40%; background-color:#ef4444;"></div>
        </div>
        <small class="text-muted">Remaining amount</small>
      </div>
    </div>

  </div>

  <!-- PAYMENT HISTORY -->
  <div class="card-box mb-4 payment-history">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h6 class="m-0">Payment History</h6>
      <a href="#" class="fw-bold small text-decoration-none">
        <i class="fas fa-download me-1"></i> Download Receipt
      </a>
    </div>

    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>Date</th>
            <th>Description</th>
            <th>Amount</th>
            <th>Method</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>10 Jan 2026</td>
            <td>Semester 4 Fees</td>
            <td>&#8377; 6,000</td>
            <td>Online</td>
            <td><span class="badge bg-success">Paid</span></td>
          </tr>
          <tr>
            <td>15 Oct 2025</td>
            <td>Semester 3 Fees</td>
            <td>&#8377; 6,000</td>
            <td>UPI</td>
            <td><span class="badge bg-success">Paid</span></td>
          </tr>
          <tr>
            <td>05 Jul 2025</td>
            <td>Semester 2 Fees</td>
            <td>&#8377; 8,000</td>
            <td>Cash</td>
            <td><span class="badge bg-warning text-dark">Partial</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- DUE PAYMENT SECTION -->
  <div class="card-box mb-4">
    <h6>Upcoming / Due Payments</h6>

    <div class="schedule-item">
      <div class="schedule-time">30 Mar 2026</div>
      <div class="schedule-details">
        <div class="schedule-subject">Semester 5 Fees</div>
        <div class="schedule-meta">Amount: &#8377; 8,000</div>
      </div>
      <a href="#" class="btn btn-sm btn-primary">
        <i class="fas fa-credit-card me-1"></i> Pay Now
      </a>
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
