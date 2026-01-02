<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Student Navbar</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

<style>
:root {
  --primary-blue:#2563eb;
  --dark-blue:#1e3a8a;
  --light-bg:#f8fafc;
  --card-bg:#ffffff;
  --nav-bg:#4a5fe8ff;
  --text-main:#1e293b;
  --text-muted:#64748b;
}

body{
 margin:0;
 font-family:'Poppins',sans-serif;
}

/* NAVBAR */
.navbar-custom{
 background:var(--nav-bg);
 padding:.5rem 2%;
 box-shadow:0 2px 10px rgba(0,0,0,.1)
}
.navbar-custom .container-fluid{
 display:flex;
 align-items:center;
 justify-content:space-between
}
.navbar-brand-custom{
 font-weight:500;
 font-family:'Franklin Gothic Medium','Arial Narrow',Arial,sans-serif;
 color:#fff!important;
 text-transform:uppercase;
 font-size:40px;
 padding:0
}
.brand-subtitle{
 color:#f5f6f7;
 margin-top:5px;
 font-size:17px;
 letter-spacing:2px;
 opacity:.9
}
.navbar-nav{gap:10px;align-items:center}

.nav-link-custom{
 display:flex;
 align-items:center;
 gap:8px;
 padding:.8rem 1.2rem!important;
 color:#f5f6f7!important;
 font-weight:500;
 border-radius:10px;
 transition:.3s
}
.nav-link-custom:hover,
.nav-link-custom.active{
 background:#fff;
 color:#111!important
}
.navbar-collapse {
  overflow: hidden; /* required for smooth collapse */
  transition: height 0.35s ease; /* smooth animation */
}




/* RESPONSIVE */
@media(max-width:768px){
 .navbar-brand-custom{font-size:28px}
 .brand-subtitle{font-size:13px;letter-spacing:1px}
}
@media(max-width:992px){
 .navbar-collapse{
  background:#4a5fe8ff;
  padding:1rem;
  border-radius:12px;
  margin-top:10px
 }
 .nav-link-custom{width:100%;justify-content:flex-start}
}
@media(max-width:1200px){
 .nav-link-custom{padding:.5rem .7rem!important;font-size:.9rem}
}
</style>
</head>

<body>

<nav class="navbar navbar-expand-xl navbar-custom">
  <div class="container-fluid px-3">

    <a class="navbar-brand d-flex flex-column lh-1 me-4" href="#">
      <span class="navbar-brand-custom">SMS</span>
      <small class="brand-subtitle">Student</small>
    </a>

    <button class="navbar-toggler border-0 text-white" type="button"
      data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-xl-center gap-xl-2 mt-3 mt-xl-0">

        <li class="nav-item"><a class="nav-link nav-link-custom active" href="#"><i class="fas fa-th-large"></i> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-book-open"></i> My Courses</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-file-alt"></i> Assignments</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-poll"></i> Results</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fa-solid fa-indian-rupee-sign"></i> Fees</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-calendar"></i> Schedule</a></li>

        <li class="nav-item position-relative">
          <a class="nav-link nav-link-custom" href="#">
            <i class="fas fa-bell"></i> Notices
            <span class="badge bg-danger ms-1">2</span>
          </a>
        </li>

        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-user-circle"></i> Profile</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>

      </ul>
    </div>
  </div>
</nav>

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
