<?php include 'admin_header.php';?>
<?php include 'admin_menu.php';?>

<div class="main-content">

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="page-title mb-0">Faculty List</h2>
    <a href="register_faculty.php" class="btn btn-theme">
        <i class="fas fa-user-plus me-2"></i>Register Faculty
    </a>
</div>

<div class="card-box">
<h6 class="section-title">Registered Faculty</h6>

<div class="table-responsive">
<table class="table table-bordered table-hover align-middle">
    <thead>
        <tr>
            <th>Faculty ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Email</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>FAC201</td>
            <td>Dr. Anil Mehta</td>
            <td>Computer Science</td>
            <td>Professor</td>
            <td>anil@gmail.com</td>
            <td class="text-center">
                <a href="faculty_admin_profile.php" class="btn btn-sm btn-theme">
                    View Details
                </a>
            </td>
        </tr>
        <tr>
            <td>FAC202</td>
            <td>Ms. Pooja Sharma</td>
            <td>Information Technology</td>
            <td>Assistant Professor</td>
            <td>pooja@gmail.com</td>
            <td class="text-center">
                <a href="faculty_admin_profile.php" class="btn btn-sm btn-theme">
                    View Details
                </a>
            </td>
        </tr>
        <tr>
            <td>FAC203</td>
            <td>Mr. Rahul Verma</td>
            <td>Commerce</td>
            <td>Lecturer</td>
            <td>rahul@gmail.com</td>
            <td class="text-center">
                <a href="faculty_admin_profile.php" class="btn btn-sm btn-theme">
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
