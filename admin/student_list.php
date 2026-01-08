<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Student List - Student Management System</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
<link href="style/amenu.css" rel="stylesheet"/>
<link href="style/stud_list.css" rel="stylesheet"/>



</head>
<body>
  <?php include 'admin_menu.php'?>

<div class="main-content">

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="page-title mb-0">Student List</h2>

    <a href="register_student.php" class="btn btn-theme">
        <i class="fas fa-user-plus me-2"></i>Register Student
    </a>
</div>

<div class="card-box">
<h6 class="section-title">Registered Students</h6>

<div class="table-responsive">
<table class="table table-bordered table-hover align-middle">
    <thead>
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Semester</th>
            <th>Email</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>STU101</td>
            <td>Riya Patel</td>
            <td>BSc IT</td>
            <td>6</td>
            <td>riya@gmail.com</td>
            <td class="text-center">
                <a href="student_admin_profile.php" class="btn btn-sm btn-theme">
                    View Details
                </a>
            </td>
        </tr>
        <tr>
            <td>STU102</td>
            <td>Aman Shah</td>
            <td>BCA</td>
            <td>1</td>
            <td>aman@gmail.com</td>
            <td class="text-center">
                <a href="student_admin_profile.php" class="btn btn-sm btn-theme">
                    View Details
                </a>
            </td>
        </tr>
        <tr>
            <td>STU103</td>
            <td>Neha Desai</td>
            <td>BCom</td>
            <td>5</td>
            <td>neha@gmail.com</td>
            <td class="text-center">
                <a href="student_admin_profile.php" class="btn btn-sm btn-theme">
                    View Details
                </a>
            </td>
        </tr>
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