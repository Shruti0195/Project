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
        
        <li class="nav-item">
        <a class="nav-link nav-link-custom <?= ($currentPage == 'admin_dashboard.php') ? 'active' : '' ?>"
        href="admin_dashboard.php">
        <i class="fas fa-tachometer-alt"></i> Dashboard
      </a>

      </li>

        <li class="nav-item">
        <a class="nav-link nav-link-custom <?= ($currentPage == 'student_list.php' || $currentPage == 'student_admin_profile.php' || $currentPage == 'register_student.php' || $currentPage == 'admin_student_payment.php') ? 'active' : '' ?>" 
          href="student_list.php">
          <i class="fas fa-user-graduate"></i> Student
        </a>
      </li>

        <li class="nav-item">
        <a class="nav-link nav-link-custom <?= ($currentPage == 'faculty_list.php' || $currentPage == 'faculty_admin_profile.php' || $currentPage == 'register_faculty.php') ? 'active' : '' ?>" 
          href="faculty_list.php">
          <i class="fas fa-chalkboard-teacher"></i> Faculty
        </a>
      </li>

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
