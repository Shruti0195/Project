<?php include 'admin_header.php'?>
<?php include 'admin_menu.php'?>
<div class="main-content">
<div class="heading-back">
<h2 class="page-title">Faculty Registration Form</h2>
<a href="javascript:history.back()" class="btn btn-theme">← Back</a>
</div>

<form method="POST" action="save_faculty.php">

<!-- PERSONAL INFORMATION -->
<div class="card-box">
<h6 class="section-title">Personal Information</h6>
<div class="row g-3">
<div class="col-md-4"><label class="form-label">First Name</label><input type="text" name="firstname" class="form-control"></div>
<div class="col-md-4"><label class="form-label">Father/Husband Name</label><input type="text" name="lastname" class="form-control"></div>
<div class="col-md-4"><label class="form-label">Last Name</label><input type="text" name="lastname" class="form-control"></div>

<div class="col-md-6"><label class="form-label">Gender</label>
<select name="gender" class="form-select"><option>Female</option><option>Male</option><option>Other</option></select></div>

<div class="col-md-6"><label class="form-label">Date of Birth</label><input type="date" name="dob" class="form-control"></div>

<div class="col-md-6"><label class="form-label">Marital Status</label>
<select name="marital" class="form-select"><option>Single</option><option>Married</option></select></div>

<div class="col-md-6"><label class="form-label">Personal Contact</label><input type="text" name="phone" class="form-control"></div>

<div class="col-md-6"><label class="form-label">Official Email</label><input type="email" name="email" class="form-control"></div>

<div class="col-md-6"><label class="form-label">Aadhar Number</label><input type="text" name="aadhar" class="form-control"></div>

<div class="col-md-6"><label class="form-label">Languages Known</label><input type="text" name="languages" class="form-control"></div>

<div class="col-md-6">
<label class="form-label">Blood Group</label>
<select name="blood" class="form-select">
<option value="">Select</option>
<option>A+</option><option>A-</option><option>B+</option><option>B-</option>
<option>O+</option><option>O-</option><option>AB+</option><option>AB-</option>
</select>
</div>
</div>
</div>

<!-- PROFESSIONAL IDENTITY -->
<div class="card-box">
<h6 class="section-title">Professional Identity</h6>
<div class="row g-3">
<div class="col-md-6"><label class="form-label">Designation</label><input type="text" name="designation" class="form-control"></div>
<div class="col-md-6"><label class="form-label">Department</label><input type="text" name="department" class="form-control"></div>
<div class="col-md-6"><label class="form-label">Highest Qualification</label><input type="text" name="qualification" class="form-control"></div>
<div class="col-md-6"><label class="form-label">Date of Joining</label><input type="date" name="joining_date" class="form-control"></div>
<div class="col-md-6"><label class="form-label">Employment Type</label><input type="text" name="employment_type" class="form-control"></div>
<div class="col-md-6"><label class="form-label">Teaching Experience (Years)</label><input type="number" name="experience" class="form-control"></div>
</div>
</div>

<!-- EXPERTISE & RESEARCH -->
<div class="card-box">
<h6 class="section-title">Expertise & Research</h6>
<div class="row g-3">
<div class="col-md-12"><label class="form-label">Primary Research Areas</label><input type="text" name="research_areas" class="form-control"></div>
<div class="col-md-12"><label class="form-label">Subjects Taught</label><input type="text" name="subjects_taught" class="form-control"></div>
<div class="col-md-6"><label class="form-label">Research Publications</label><input type="text" name="publications" class="form-control"></div>
<div class="col-md-6"><label class="form-label">Mentorship & Projects</label><input type="text" name="projects" class="form-control"></div>
<div class="col-md-12"><label class="form-label">Administrative Responsibilities</label><input type="text" name="administrative" class="form-control"></div>
</div>
</div>

<!-- RESIDENTIAL ADDRESS -->
<div class="card-box">
<h6 class="section-title">Residential Address</h6>
<div class="row g-3">
<div class="col-md-12"><label class="form-label">Permanent Address</label><input type="text" name="permanent_address" class="form-control"></div>
<div class="col-md-12"><label class="form-label">Current Residential Address</label><input type="text" name="current_address" class="form-control"></div>
</div>
</div>

<!-- EMERGENCY CONTACT -->
<div class="card-box">
<h6 class="section-title">Emergency Contact</h6>
<div class="row g-3">
<div class="col-md-6"><label class="form-label">Spouse/Kin Name</label><input type="text" name="emergency_name" class="form-control"></div>
<div class="col-md-6"><label class="form-label">Emergency Phone</label><input type="text" name="emergency_phone" class="form-control"></div>
<div class="col-md-12"><label class="form-label">Family Physician</label><input type="text" name="physician" class="form-control"></div>
</div>
</div>

<div class="button-row mt-4">
    <button type="reset" class="btn btn-clear px-4">Clear Form</button>
    <button type="submit" class="btn btn-theme px-5">Register</button>
</div>


</form>
</div>

<?php include 'admin_footer.php';?>
