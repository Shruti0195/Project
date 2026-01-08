<!-- BRAND -->
 <nav class="navbar navbar-expand-xl navbar-custom">
  <div class="container-fluid">
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
        <li class="nav-item">
        <a class="nav-link nav-link-custom <?= ($currentPage == 'faculty_dashboard.php') ? 'active' : '' ?>" 
          href="faculty_dashboard.php">
          <i class="fas fa-user-circle"></i> Dashboard
        </a>
      </li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-book"></i> Subjects</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-users"></i> Students</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-calendar"></i> Schedule</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-check-square"></i> Mark Attendance</a></li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-bell"></i> Notifications</a></li>
        <li class="nav-item">
        <a class="nav-link nav-link-custom <?= ($currentPage == 'faculty_profile.php') ? 'active' : '' ?>" 
          href="faculty_profile.php">
          <i class="fas fa-user-circle"></i> Profile
        </a>
      </li>
        <li class="nav-item"><a class="nav-link nav-link-custom" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>