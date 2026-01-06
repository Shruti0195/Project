<?php include 'admin_header.php';?>
<?php include 'admin_menu.php';?>

<div class="main-content">

<h2 class="page-title">Faculty List</h2>

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
