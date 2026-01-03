<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Faculty Registration</title>
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
    background:var(--bg);
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
    letter-spacing:.4px;
    margin-bottom:2rem;
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
    letter-spacing:.5px;
}

.btn-theme{
    background:var(--theme);
    color:#fff;
    border:none;
    transition:all .2s ease;
    border-radius:8px;
}

.btn-theme:hover{
    transform:translateY(-2px) scale(1.02);
    box-shadow:0 6px 12px rgba(6,95,70,.25);
    color:#fff;
}

.btn-clear{
    background:#fff;
    color:var(--theme);
    border:2px solid var(--theme);
    transition:all .2s ease;
}

.btn-clear:hover{
    transform:translateY(-2px) scale(1.02);
    box-shadow:0 6px 12px rgba(6,95,70,.25);
    background:#fff;
    color:var(--theme);
}

.form-label{font-size:.85rem;font-weight:600;}

/* Heading + Back button container */
.heading-back {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: nowrap; 
    gap: 0.5rem;
    margin-bottom: 2rem;
}

.heading-back h2.page-title {
    font-family:'Montserrat',sans-serif;
    font-weight:800;
    font-size:2rem;
    margin:0;
    flex-shrink:1; 
    min-width:0;    
}

.heading-back .btn-back {
    background: var(--theme);
    color: #fff;
    border-radius:8px;
    flex-shrink:0;      
    white-space: nowrap; 
    padding:0.45rem 1rem;
    font-size:0.95rem;
    transition: all 0.2s ease;
}

.heading-back .btn-back:hover{
    transform:translateY(-2px) scale(1.02);
    box-shadow:0 6px 12px rgba(6,95,70,.25);
    color:#fff;
}

/* Buttons container */
.button-row {
    display: flex;
    justify-content: space-between; /* Clear left, Submit right */
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap; /* stack on very small screens */
}

/* Individual buttons */
.button-row button {
    width: auto; /* let button size itself based on content */
    padding: 0.5rem 1.5rem; /* nice padding */
    flex: 0 0 auto; /* prevent flex-grow */
}

/* Theme button hover */
.btn-theme:hover {
    background-color: #064e3b; /* darker shade */
    transform: translateY(-2px) scale(1.02);
    box-shadow: 0 6px 12px rgba(6,95,70,0.25);
    color: #fff;
}

/* Clear button hover */
.btn-clear:hover {
    background: #fff;
    transform: translateY(-2px) scale(1.02);
    box-shadow: 0 6px 12px rgba(6,95,70,0.25);
    color: var(--theme);
}



@media(max-width:576px){
    .button-row button {
        font-size:0.85rem;
        padding:0.35rem 0.8rem;
    }
}
@media(max-width:768px){
    .main-content{padding:1.2rem;}
    .page-title{font-size:1.6rem;}
    .heading-back h2.page-title {font-size:1.6rem;}
    .heading-back .btn-back {padding:0.35rem 0.8rem;font-size:0.85rem;}
}
@media(max-width:480px){
    .heading-back h2.page-title {font-size:1rem;}
    .heading-back .btn-back {padding:0.3rem 0.7rem;font-size:0.8rem;}
}
</style>
</head>

<body>
<div class="main-content">
<div class="heading-back">
    <h2 class="page-title m-0">Faculty Registration Form</h2>
    <a href="javascript:history.back()" class="btn btn-theme btn-back">← Back</a>
</div>

<form method="POST" action="save_faculty.php">

<!-- PERSONAL INFORMATION -->
<div class="card-box">
<h6 class="section-title">Personal Information</h6>
<div class="row g-3">
<div class="col-md-6 col-sm-12"><label class="form-label">First Name</label><input type="text" name="firstname" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Last Name</label><input type="text" name="lastname" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Gender</label>
<select name="gender" class="form-select"><option>Female</option><option>Male</option><option>Other</option></select></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Date of Birth</label><input type="date" name="dob" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Marital Status</label>
<select name="marital" class="form-select"><option>Single</option><option>Married</option></select></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Personal Contact</label><input type="text" name="phone" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Official Email</label><input type="email" name="email" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Aadhar Number</label><input type="text" name="aadhar" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Languages Known</label><input type="text" name="languages" class="form-control"></div>
</div>
</div>

<!-- HEALTH INFORMATION -->
<div class="card-box">
<h6 class="section-title">Health Information</h6>
<div class="row g-3">
<div class="col-md-3 col-sm-6"><label class="form-label">Blood Group</label>
<select name="blood" class="form-select">
<option value="">Select</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select></div>
<div class="col-md-3 col-sm-6"><label class="form-label">Height (cm)</label><input type="number" name="height" class="form-control"></div>
<div class="col-md-3 col-sm-6"><label class="form-label">Weight (kg)</label><input type="number" min="0" name="weight" class="form-control"></div>
<div class="col-md-3 col-sm-6"><label class="form-label">Vision</label><input type="text" name="vision" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Known Allergies</label><input type="text" name="allergy" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Medical History</label><input type="text" name="medical" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Vaccination Status</label>
<select name="vaccine" class="form-select"><option>Yes</option><option>No</option></select></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Disability (if any)</label><input type="text" name="disability" class="form-control"></div>
</div>
</div>

<!-- PROFESSIONAL IDENTITY -->
<div class="card-box">
<h6 class="section-title">Professional Identity</h6>
<div class="row g-3">
<div class="col-md-6 col-sm-12"><label class="form-label">Designation</label><input type="text" name="designation" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Department</label><input type="text" name="department" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Date of Joining</label><input type="date" name="joining_date" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Staff Room Location</label><input type="text" name="staff_room" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Employment Type</label><input type="text" name="employment_type" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Teaching Experience (Years)</label><input type="number" name="experience" class="form-control"></div>
</div>
</div>

<!-- EXPERTISE & RESEARCH -->
<div class="card-box">
<h6 class="section-title">Expertise & Research</h6>
<div class="row g-3">
<div class="col-md-12 col-sm-12"><label class="form-label">Primary Research Areas</label><input type="text" name="research_areas" class="form-control"></div>
<div class="col-md-12 col-sm-12"><label class="form-label">Subjects Taught</label><input type="text" name="subjects_taught" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Research Publications</label><input type="text" name="publications" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Mentorship & Projects</label><input type="text" name="projects" class="form-control"></div>
<div class="col-md-12 col-sm-12"><label class="form-label">Administrative Responsibilities</label><input type="text" name="administrative" class="form-control"></div>
</div>
</div>

<!-- RESIDENTIAL ADDRESS -->
<div class="card-box">
<h6 class="section-title">Residential Address</h6>
<div class="row g-3">
<div class="col-md-12 col-sm-12"><label class="form-label">Permanent Address</label><input type="text" name="permanent_address" class="form-control"></div>
<div class="col-md-12 col-sm-12"><label class="form-label">Current Residential Address</label><input type="text" name="current_address" class="form-control"></div>
</div>
</div>

<!-- EMERGENCY CONTACT -->
<div class="card-box">
<h6 class="section-title">Emergency Contact</h6>
<div class="row g-3">
<div class="col-md-6 col-sm-12"><label class="form-label">Spouse/Kin Name</label><input type="text" name="emergency_name" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Emergency Phone</label><input type="text" name="emergency_phone" class="form-control"></div>
<div class="col-md-12 col-sm-12"><label class="form-label">Family Physician</label><input type="text" name="physician" class="form-control"></div>
</div>
</div>

<!-- BUTTONS -->
<div class="button-row mt-4">
    <button type="reset" class="btn btn-clear px-4">Clear Form</button>
    <button type="submit" class="btn btn-theme px-5">Register</button>
</div>

</form>
</div>
</body>
</html>
