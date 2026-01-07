<?php include 'admin_header.php';?>
<?php include 'admin_menu.php';?>

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
<?php include 'admin_footer.php';?>