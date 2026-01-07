<?php include 'student_header.php'; ?>
<?php include 'student_menu.php'; ?>

<div class="main-content">
    <div class="mb-4">
        <h2 class="fw-bold">Student Profile</h2>
        <p class="text-muted">Comprehensive record of personal, academic, and medical information.</p>
    </div>

<div class="row g-4 align-items-start">
        <div class="col-lg-4">
            <div class="card-box text-center profile-sticky" style="top: 20px; z-index: 10;">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="profile-img mb-3" alt="Student Photo">
                <h4 class="fw-bold mb-0">Shruti Vora</h4>
                <p class="text-primary fw-medium mb-3">ID: CS2023-0145</p>
                
                <div class="text-start border-top pt-3">
                    <p class="mb-2"><small class="profile-label d-block">Email Address</small> <span class="profile-value">shruti@gmail.com</span></p>
                    <p class="mb-0"><small class="profile-label d-block">Phone Number</small> <span class="profile-value">+91 98765 43210</span></p>
                </div>

                <div class="d-grid gap-2 mt-4">
                    <button class="btn btn-primary"><i class="fas fa-edit me-2"></i>Edit Profile</button>
                    <button class="btn btn-outline-secondary" onclick="window.location.href='student_payment.php'"><i class="fa-solid fa-file-invoice-dollar"></i> 
                    View Fees Details</button>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            
            <div class="card-box">
                <h6 class="section-title"><i class="fas fa-user me-2"></i>Personal Information</h6>
                <div class="row">
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Date of Birth</div>
                        <div class="profile-value">12 March 2004</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Gender</div>
                        <div class="profile-value">Female</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Nationality</div>
                        <div class="profile-value">Indian</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Religion / Caste</div>
                        <div class="profile-value">Hindu / General</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Languages Known</div>
                        <div class="profile-value">English, Hindi, Marathi, Gujarati</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Aadhar Number</div>
                        <div class="profile-value">XXXX-XXXX-1234</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Place of Birth</div>
                        <div class="profile-value">Mumbai, Maharashtra</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Marital Status</div>
                        <div class="profile-value">Single</div>
                    </div>
                </div>
            </div>

             <div class="card-box">
                <h6 class="section-title"><i class="fas fa-graduation-cap me-2"></i>Academic Status</h6>
                <div class="row">
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Current Course</div>
                        <div class="profile-value">B.Sc Computer Science (Honors)</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Specialization</div>
                        <div class="profile-value">Artificial Intelligence & ML</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Current Semester</div>
                        <div class="profile-value">4th Semester (Year 2)</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Last Semester GPA</div>
                        <div class="profile-value fw-bold text-success">8.62 / 10.0</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Admission Year</div>
                        <div class="profile-value">2023</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Class Section</div>
                        <div class="profile-value">Section B</div>
                    </div>
                </div>
            </div>

            <div class="card-box">
                <h6 class="section-title"><i class="fas fa-users me-2"></i>Family Details</h6>
                <div class="row">
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Father's Name</div>
                        <div class="profile-value">Rajesh Vora</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Father's Occupation</div>
                        <div class="profile-value">Business Owner</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Mother's Name</div>
                        <div class="profile-value">Meena Vora</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Mother's Occupation</div>
                        <div class="profile-value">Homemaker</div>
                    </div>
                </div>
            </div>

            <div class="card-box">
                <h6 class="section-title"><i class="fas fa-map-marker-alt me-2"></i>Address Details</h6>
                <div class="mb-4">
                    <p class="profile-label mb-1">Permanent Address</p>
                    <p class="profile-value">Flat No. 402, Sunshine Heights, J.P. Road, Andheri West, Mumbai, Maharashtra - 400053, India</p>
                </div>
                <div class="mb-4 pt-3 border-top">
                    <p class="profile-label mb-1">Current Residential Address</p>
                    <p class="profile-value">Same as Permanent Address</p>
                </div>
            </div>


            <div class="card-box">
                <h6 class="section-title"><i class="fas fa-heartbeat me-2"></i>Physical & Health Metrics</h6>
                <div class="row text-center">
                    <div class="col-md-3 border-end">
                        <div class="profile-label">Blood Group</div>
                        <div class="mt-2"><span class="badge-blood">B+ Positive</span></div>
                    </div>
                    <div class="col-md-3 border-end">
                        <div class="profile-label">Height</div>
                        <div class="profile-value mt-2">165 cm</div>
                    </div>
                    <div class="col-md-3 border-end">
                        <div class="profile-label">Weight</div>
                        <div class="profile-value mt-2">54 kg</div>
                    </div>
                    <div class="col-md-3">
                        <div class="profile-label">Vision (Left/Right)</div>
                        <div class="profile-value mt-2">6/6 (Normal)</div>
                    </div>
                </div>
                <div class="row mt-3 pt-3 border-top">
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Known Allergies</div>
                        <div class="profile-value">Lactose Intolerant</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Medical History</div>
                        <div class="profile-value">None / Healthy</div>
                    </div>
                    <div class="col-md-6 info-row">
                        <div class="profile-label">Vaccination Status</div>
                        <div class="profile-value text-success fw-bold">Fully Vaccinated</div>
                    </div>
                </div>
            </div>
           

            <div class="card-box bg-light border-0">
                <h6 class="section-title text-dark"><i class="fas fa-phone-alt me-2"></i>Emergency Contact (Primary)</h6>
                <div class="row">
                    <div class="col-md-6">
                        <div class="profile-label">Guardian Name</div>
                        <div class="profile-value">Rajesh Vora (Father)</div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-label">Contact Number</div>
                        <div class="profile-value">+91 98200 12345</div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="profile-label">Alternate Number</div>
                        <div class="profile-value">+91 98200 54321 (Mother)</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'student_footer.php'; ?>