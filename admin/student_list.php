<?php include 'admin_menu.php'; ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Student List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<style>
:root{
    --theme:#065f46;
    --bg:#c7f0df;
    --card:#ffffff;
    --border:#a7f3d0;
    --text:#064e3b;
}
body{
    background:#f2f7f3ff;
    font-family:'Poppins',sans-serif;
    color:var(--text);
}
.main-content{padding:2rem 4%;}

.card-box{
    background:var(--card);
    border:1px solid var(--border);
    border-radius:14px;
    padding:1.5rem;
    margin-bottom:1.5rem;
    box-shadow:0 6px 10px rgba(0,0,0,.08);
}

.page-title{
    font-family:'Montserrat',sans-serif;
    font-weight:800;
    font-size:2rem;
    margin-bottom:1.5rem;
}

.section-title{
    font-family:'Montserrat',sans-serif;
    color:var(--theme);
    font-weight:700;
    font-size:1rem;
    border-bottom:2px solid var(--border);
    padding-bottom:.45rem;
    margin-bottom:1rem;
    text-transform:uppercase;
}

.btn-theme{
    background:var(--theme);
    color:#fff;
    border-radius:8px;
    border:none;
}
.btn-theme:hover{
    background:#064e3b;
    color:#fff;
}

.table thead{
    background:var(--border);
}
.table th{
    font-size:0.85rem;
    text-transform:uppercase;
    color:var(--theme);
}

/* Hover background only, text color remains unchanged */
.card-box .table.table-hover tbody tr:hover td {
    background-color: #f0f9f4 !important; /* your green hover */
    color: inherit !important;            /* keeps the original text color */
    cursor: pointer;
}

/* Optional: hover effect for the button inside row */
.card-box .table.table-hover tbody tr:hover .btn-theme {
    transform: translateY(-1px) scale(1.02);
    box-shadow: 0 4px 8px rgba(6,95,70,0.2);
    transition: all 0.2s ease;
}

/* Smooth transition for row hover */
.table td {
    vertical-align: middle;
    font-size: 0.9rem;
    transition: background-color 0.2s ease;
}



/* .table td{
    vertical-align:middle;
    font-size:0.9rem;
} */

@media(max-width:768px){
    .main-content{padding:1.2rem;}
    .page-title{font-size:1.6rem;}
}
</style>
</head>

<body>
<div class="main-content">

<h2 class="page-title">Student List</h2>

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
</body>
</html>
