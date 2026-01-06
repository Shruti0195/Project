<?php include 'admin_header.php'; ?>
<?php include 'admin_menu.php'; ?>
<div class="main-content">
<div class="heading-back">
    <h2 class="page-title m-0">Student Registration Form</h2>
    <a href="javascript:history.back()" class="btn btn-theme btn-back">
        ← Back
    </a>
</div>

<form method="POST" action="save_student.php">

<!-- PERSONAL INFORMATION -->
<div class="card-box">
<h6 class="section-title">Personal Information</h6>
<div class="row g-3">
<div class="col-md-4 col-sm-12"><label class="form-label">First Name</label><input type="text" name="firstname" class="form-control"></div>
<div class="col-md-4 col-sm-12"><label class="form-label">Father/Husband Name</label><input type="text" name="fathername" class="form-control"></div>
<div class="col-md-4 col-sm-12"><label class="form-label">Last Name</label><input type="text" name="lastname" class="form-control"></div>

<div class="col-md-6 col-sm-12"><label class="form-label">Date of Birth</label><input type="date" name="dob" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Gender</label>
<select name="gender" class="form-select"><option>Female</option><option>Male</option><option>Other</option></select></div>

<div class="col-md-6 col-sm-12"><label class="form-label">Nationality</label><input type="text" name="nationality" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Religion / Caste</label><input type="text" name="religion" class="form-control"></div>

<div class="col-md-6 col-sm-12"><label class="form-label">Languages Known</label><input type="text" name="languages" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Aadhar Number</label><input type="text" name="aadhar" class="form-control"></div>

<div class="col-md-6 col-sm-12"><label class="form-label">Place of Birth</label><input type="text" name="birth_place" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Marital Status</label>
<select name="marital" class="form-select"><option>Single</option><option>Married</option></select></div>
</div>
</div>

<!-- CURRENT ACADEMIC -->
<div class="card-box">
<h6 class="section-title">Current Academic Details</h6>
<div class="row g-3">
<div class="col-md-6 col-sm-12"><label class="form-label">Course</label><input type="text" name="course" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Specialization</label><input type="text" name="specialization" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Semester</label><input type="text" name="semester" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Last GPA</label><input type="text" name="gpa" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Admission Year</label><input type="text" name="admission_year" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Section</label><input type="text" name="section" class="form-control"></div>
</div>
</div>

<!-- PREVIOUS ACADEMIC INFORMATION -->
<div class="card-box">
<h6 class="section-title">Previous Academic Information</h6>
<div class="row g-3">

<div class="col-md-3 col-sm-6">
    <label class="form-label">Last Standard</label>
    <input type="text" name="last_standard" class="form-control">
</div>

<div class="col-md-3 col-sm-6">
    <label class="form-label">Board</label>
    <input type="text" name="board" class="form-control">
</div>

<div class="col-md-3 col-sm-6">
    <label class="form-label">Passing Year</label>
    <input type="text" name="passing_year" class="form-control">
</div>

<div class="col-md-3 col-sm-6">
    <label class="form-label">Percentage</label>
    <input type="number" step="0.01" name="percentage" class="form-control">
</div>

</div>
</div>

<!-- FAMILY DETAILS -->
<div class="card-box">
<h6 class="section-title">Family Details</h6>
<div class="row g-3">

<div class="col-md-6 col-sm-12">
    <label class="form-label">Father's Name</label>
    <input type="text" name="father_name" class="form-control">
</div>

<div class="col-md-6 col-sm-12">
    <label class="form-label">Father's Occupation</label>
    <input type="text" name="father_occupation" class="form-control">
</div>

<div class="col-md-6 col-sm-12">
    <label class="form-label">Mother's Name</label>
    <input type="text" name="mother_name" class="form-control">
</div>

<div class="col-md-6 col-sm-12">
    <label class="form-label">Mother's Occupation</label>
    <input type="text" name="mother_occupation" class="form-control">
</div>

</div>
</div>

<!-- ADDRESS DETAILS -->
<div class="card-box">
<h6 class="section-title">Address Details</h6>
<div class="row g-3">

<div class="col-md-6 col-sm-12">
    <label class="form-label">Permanent Address</label>
    <textarea name="permanent_address" rows="3" class="form-control"></textarea>
</div>

<div class="col-md-6 col-sm-12">
    <label class="form-label">Current Residential Address</label>
    <textarea name="current_address" rows="3" class="form-control"></textarea>
</div>

</div>
</div>

<!-- HEALTH INFORMATION -->
<div class="card-box">
<h6 class="section-title">Health Information</h6>
<div class="row g-3">
<div class="col-md-3 col-sm-6">
    <label class="form-label">Blood Group</label>
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
    </select>
</div>

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



<!-- EMERGENCY CONTACT -->
<div class="card-box">
<h6 class="section-title">Emergency Contact</h6>
<div class="row g-3">
<div class="col-md-6 col-sm-12"><label class="form-label">Guardian Name</label><input type="text" name="guardian" class="form-control"></div>
<div class="col-md-6 col-sm-12"><label class="form-label">Primary Contact</label><input type="text" name="emergency_phone" class="form-control"></div>
<div class="col-md-12 col-sm-12"><label class="form-label">Alternate Contact</label><input type="text" name="alternate_phone" class="form-control"></div>
</div>
</div>

<!-- BUTTONS -->
<div class="button-row mt-4">
    <button type="reset" class="btn btn-clear px-4">
        Clear Form
    </button>
    <button type="submit" class="btn btn-theme px-5">
        Register
    </button>
</div>

</form>
</div>
<?php include 'admin_footer.php'; ?>
