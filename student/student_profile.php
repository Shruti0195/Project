<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Student Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>

<style>
:root{
  --primary-blue:#2563eb;
  --nav-bg:#4a5fe8ff;
  --light-bg:#f8fafc;
  --card-bg:#ffffff;
  --text-main:#1e293b;
  --text-muted:#64748b;
}

body{
  margin:0;
  font-family:'Poppins',sans-serif;
  background:var(--light-bg);
  color:var(--text-main);
}


/* MAIN */
.main-content{
  padding:2rem 2%;
}

/* CARDS */
.card-box{
  background:var(--card-bg);
  border-radius:12px;
  padding:1.5rem;
  border:1px solid #e5e7eb;
  box-shadow:0 4px 6px rgba(0,0,0,.05);
}

/* PROFILE IMAGE */
.profile-img{
  width:130px;
  height:130px;
  border-radius:50%;
  object-fit:cover;
  border:4px solid var(--primary-blue);
}

/* LABELS */
.profile-label{
  font-weight:600;
  color:var(--text-muted);
  font-size:.9rem;
}
.profile-value{
  font-weight:500;
}
</style>
</head>

<body>
<?php include 'student_menu.php'; ?>

<!-- MAIN CONTENT (UNCHANGED) -->
<div class="main-content">

  <div class="mb-4">
    <h2 class="fw-bold">My Profile</h2>
    <p class="text-muted">View and manage your personal information</p>
  </div>

  <div class="row g-4">

    <div class="col-lg-4">
      <div class="card-box text-center">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="profile-img mb-3" alt="Student Photo">
        <h5 class="fw-bold mb-0">Shruti Vora</h5>
        <small class="text-muted">Computer Science Student</small>

        <hr>

        <p class="mb-1"><i class="fas fa-envelope text-primary me-2"></i> shruti@gmail.com</p>
        <p class="mb-1"><i class="fas fa-phone text-primary me-2"></i> +91 98765 43210</p>
        <p class="mb-0"><i class="fas fa-location-dot text-primary me-2"></i> Mumbai, India</p>

        <button class="btn btn-primary mt-3 w-100">
          <i class="fas fa-edit me-2"></i>Edit Profile
        </button>
      </div>
    </div>

    <div class="col-lg-8">
      <div class="card-box mb-4">
        <h6 class="fw-bold mb-3">Personal Information</h6>
        <div class="row mb-2"><div class="col-md-4 profile-label">Full Name</div><div class="col-md-8 profile-value">Shruti Vora</div></div>
        <div class="row mb-2"><div class="col-md-4 profile-label">Date of Birth</div><div class="col-md-8 profile-value">12 March 2004</div></div>
        <div class="row mb-2"><div class="col-md-4 profile-label">Gender</div><div class="col-md-8 profile-value">Female</div></div>
        <div class="row"><div class="col-md-4 profile-label">Address</div><div class="col-md-8 profile-value">Mumbai, Maharashtra, India</div></div>
      </div>

      <div class="card-box">
        <h6 class="fw-bold mb-3">Academic Information</h6>
        <div class="row mb-2"><div class="col-md-4 profile-label">Enrollment No</div><div class="col-md-8 profile-value">CS2023-0145</div></div>
        <div class="row mb-2"><div class="col-md-4 profile-label">Course</div><div class="col-md-8 profile-value">B.Sc Computer Science</div></div>
        <div class="row mb-2"><div class="col-md-4 profile-label">Semester</div><div class="col-md-8 profile-value">4th Semester</div></div>
        <div class="row"><div class="col-md-4 profile-label">Current GPA</div><div class="col-md-8 profile-value">8.62</div></div>
      </div>
    </div>

  </div>
</div>

</body>
</html>