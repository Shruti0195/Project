<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>SMS - Faculty Navbar</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

<style>
:root {
  --nav-bg: #54336fff;
  --text-main: #1f2937;
  --accent-purple: #a78bfa;
}

/* NAVBAR */
.navbar-custom {
  background: var(--nav-bg);
  padding: 0.5rem 2%;
  box-shadow: 0 2px 10px rgba(0,0,0,.1);
}

.navbar-brand-custom{
  font-family:'Franklin Gothic Medium','Arial Narrow',Arial,sans-serif;
  font-weight:500;
  text-transform: uppercase;
  font-size: 40px;
  color:#fff !important;
  line-height:1;
}

.brand-subtitle{
  font-size:17px;
  color:#ffffffcc;
  letter-spacing:2px;
  margin-top:5px;
  opacity:0.9;
}

/* NAV LINKS */
.navbar-nav { gap: 10px; }
.nav-link-custom {
  display:flex;
  align-items:center;
  gap:8px;
  padding:0.8rem 1.2rem!important;
  color:#f5f6f7 !important;
  font-family: 'Poppins', sans-serif;
  font-weight:500;
  font-size:1rem;
  border-radius:10px;
  transition: all 0.3s;
}
.nav-link-custom:hover,
.nav-link-custom.active{
  background:#fff;
  color: var(--text-main) !important;
}

/* RESPONSIVE */
@media(max-width:992px){
  .navbar-collapse{
    background: var(--nav-bg);
    padding: 1rem;
    border-radius:12px;
    margin-top:10px;
  }
  .nav-link-custom{ width:100%; justify-content:flex-start; }
}
@media(max-width:768px){
  .navbar-brand-custom{ font-size:28px; }
  .brand-subtitle{ font-size:13px; letter-spacing:1px; }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-xl navbar-custom">
  <div class="container-fluid">

    <!-- BRAND -->
    <a class="navbar-brand d-flex flex-column lh-1 me-4" href="#">
      <span class="navbar-brand-custom">SMS</span>
      <small class="brand-subtitle">Faculty</small>
    </a>

    <!-- TOGGLER -->
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- MENU -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-xl-center gap-xl-2 mt-3 mt-xl-0">
        <li class="nav-item"><a class="nav-link nav-link-custom active" href="#"><i class="fas fa-th-large"></i> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-book"></i> Subjects</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-users"></i> Students</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-calendar"></i> Schedule</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-check-square"></i> Mark Attendance</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-bell"></i> Notifications</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
