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

<style>
:root {
    --primary-green: #509d81ff;
    --dark-green: #065f46;
    --nav-bg: var(--dark-green);
    --text-main: #1f2937;
}

body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

/* NAVBAR STYLING */
.navbar-custom {
    background-color: var(--nav-bg);
    padding: 0.5rem 2%;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.navbar-brand-custom {
    font-weight: 500;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: #ffffff !important;
    text-transform: uppercase;
    font-size: 40px;
    padding: 0;
}

.brand-subtitle {
    color: #ffffffcc;
    margin-top: 5px;
    font-size: 17px;
    font-weight: 400;
    letter-spacing: 2px;
    text-transform: capitalize;
    opacity: 0.9;
    padding-left: 2px;
}

.nav-link-custom {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 0.8rem 1.2rem !important;
    color: #ffffff !important;
    font-weight: 500;
    font-size: 1rem;
    border-radius: 10px;
    transition: all 0.3s ease;
}

.nav-link-custom:hover, .nav-link-custom.active {
    background-color: white;
    color: var(--text-main) !important;
}

.navbar-nav { gap: 10px; }

.navbar-custom .container-fluid {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

/* Shrink links on medium screens */
@media(max-width:1200px){
  .nav-link-custom{
    padding:.5rem .7rem!important;
    font-size:.9rem;
  }
}

/* Collapse menu for smaller devices */
@media(max-width:992px){
  .navbar-collapse{
    background:var(--nav-bg);
    padding:1rem;
    border-radius:12px;
    margin-top:10px;
  }
  .nav-link-custom{
    justify-content:flex-start;
    width:100%;
  }
}
</style>
</head>

<body>

<nav class="navbar navbar-expand-xl navbar-custom">
  <div class="container-fluid">

    <!-- BRAND -->
    <a class="navbar-brand d-flex flex-column lh-1 me-4" href="#">
      <span class="navbar-brand-custom">SMS</span>
      <small class="brand-subtitle">Admin</small>
    </a>

    <!-- TOGGLER -->
    <button class="navbar-toggler border-0 text-white" type="button"
      data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- MENU -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-xl-center gap-xl-2 mt-3 mt-xl-0">
        <li class="nav-item"><a class="nav-link nav-link-custom active" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-users"></i> Users</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-book-open"></i> Courses</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-file-alt"></i> Assignments</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-chart-line"></i> Reports</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-bell"></i> Notifications</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-user-circle"></i> Profile</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
