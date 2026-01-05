<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Faculty Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>

    <style>
        :root {
            --primary-purple: #5d358dff;
            --dark-purple: #54336fff;
            --light-bg: #f9f8fcff;
            --card-bg: #ffffff;
            --text-main: #1f2937;
            --text-muted: #6b7280;
            --accent-purple: #a78bfa;
            --border-color: #e2e8f0;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-main);
        }

        .main-content {
            padding: 2rem 5%;
        }

        .card-box {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 1.5rem;
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            margin-bottom: 1.5rem;
        }

        .profile-img {
            width: 140px;
            height: 140px;
            border-radius: 12px; /* Square with rounded corners for professional look */
            object-fit: cover;
            border: 4px solid var(--accent-purple);
        }

        .section-title {
            font-size: 1rem;
            font-weight: 700;
            color: var(--primary-purple);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid var(--light-bg);
            padding-bottom: 0.5rem;
            margin-bottom: 1.25rem;
        }

        .profile-label {
            font-weight: 600;
            color: var(--text-muted);
            font-size: 0.85rem;
        }
        
        .profile-value {
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--text-main);
        }

        .info-row {
            padding: 10px 0;
            border-bottom: 1px solid var(--light-bg);
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .badge-dept {
            background-color: #f3e8ff;
            color: var(--primary-purple);
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            font-weight: 700;
            font-size: 0.85rem;
        }

        .btn-purple {
            background: var(--primary-purple);
            color: white;
        }
        .btn-purple:hover {
            background: var(--dark-purple);
            color: white;
        }
    </style>
</head>

<body>
    <?php include 'faculty_menu.php'; ?>

    <div class="main-content">
        <div class="mb-4">
            <h2 class="fw-bold" style="color: var(--dark-purple);">Faculty Profile</h2>
            <p class="text-muted">Official employment record and academic credentials.</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card-box text-center sticky-top" style="top: 20px; z-index: 10;">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="profile-img mb-3" alt="Faculty Photo">
                    <h4 class="fw-bold mb-0">Dr. Rajesh Shah</h4>
                    <p class="fw-medium mb-3" style="color: var(--primary-purple);">Employee ID: FAC-2015-009</p>
                    
                    <div class="text-start border-top pt-3">
                        <p class="mb-2"><small class="profile-label d-block">Official Email</small> <span class="profile-value">r.shah@university.com</span></p>
                        <p class="mb-2"><small class="profile-label d-block">Extension No.</small> <span class="profile-value">+91 (022) 456 - Ext 104</span></p>
                        <p class="mb-0"><small class="profile-label d-block">Department</small> <span class="badge-dept mt-1 d-inline-block">Computer Science & Engineering</span></p>
                    </div>

                    <div class="d-grid gap-2 mt-4">
                        <button class="btn btn-purple"><i class="fas fa-user-edit me-2"></i>Update Portfolio</button>
                        <button class="btn btn-outline-secondary"><i class="fas fa-file-pdf me-2"></i>Download CV</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                
             <div class="card-box">
                    <h6 class="section-title"><i class="fas fa-id-card me-2"></i>Personal Details</h6>
                    <div class="row">
                        <div class="col-md-6 info-row">
                            <div class="profile-label">Date of Birth</div>
                            <div class="profile-value">22 August 1985</div>
                        </div>
                        <div class="col-md-6 info-row">
                            <div class="profile-label">Gender</div>
                            <div class="profile-value">Male</div>
                        </div>
                         <div class="col-md-6 info-row">
                            <div class="profile-label">Personal Contact</div>
                            <div class="profile-value">+91 98200 12345</div>
                        </div>
                        <div class="col-md-6 info-row">
                            <div class="profile-label">Blood Group</div>
                            <div class="profile-value text-danger fw-bold">O Positive</div>
                        </div> 
                        <div class="col-md-6 info-row">
                            <div class="profile-label">Marital Status</div>
                            <div class="profile-value">Married</div>
                        </div>
                        <div class="col-md-6 info-row">
                            <div class="profile-label">Aadhar Number</div>
                            <div class="profile-value">XXXX-XXXX-5678</div>
                        </div>
                        <div class="col-md-6 info-row">
                            <div class="profile-label">Languages Known</div>
                            <div class="profile-value">English, Hindi, Marathi, Gujarati</div>
                        </div>
                    </div>
                </div>

                <div class="card-box">
                    <h6 class="section-title"><i class="fas fa-briefcase me-2"></i>Professional Identity</h6>
                    <div class="row">
                        <div class="col-md-6 info-row">
                            <div class="profile-label">Designation</div>
                            <div class="profile-value">Senior Assistant Professor & Ph.D. Supervisor</div>
                        </div>
                        <div class="col-md-6 info-row">
                            <div class="profile-label">Date of Joining</div>
                            <div class="profile-value">15 June 2015</div>
                        </div>
                        <div class="col-md-6 info-row">
                            <div class="profile-label">Highest Qualification</div>
                            <div class="profile-value">Ph.D. in Computer Science (Machine Learning)</div>
                        </div>
                        <div class="col-md-6 info-row">
                            <div class="profile-label">Teaching Experience</div>
                            <div class="profile-value">12 Years (Industrial: 2 yrs | Academic: 10 yrs)</div>
                        </div>
                        <div class="col-md-6 info-row">
                            <div class="profile-label">Employment Type</div>
                            <div class="profile-value">Full-Time / Permanent (Regular)</div>
                        </div>
                    </div>
                </div>

                <div class="card-box">
                    <h6 class="section-title"><i class="fas fa-microscope me-2"></i>Expertise & Research</h6>
                    <div class="row">
                        <div class="col-md-12 info-row">
                            <div class="profile-label">Primary Research Areas</div>
                            <div class="profile-value">Convolutional Neural Networks (CNN), Natural Language Processing, Big Data Analytics, Predictive Modeling</div>
                        </div>
                        <div class="col-md-12 info-row">
                            <div class="profile-label">Subjects Taught (Undergraduate & Postgrad)</div>
                            <div class="profile-value">Data Structures, Machine Learning, DBMS, Artificial Intelligence, Python for Data Science</div>
                        </div>
                        <div class="col-md-6 info-row">
                            <div class="profile-label">Research Publications</div>
                            <div class="profile-value">14 International Journals (Scopus Index), 8 IEEE Conferences</div>
                        </div>
                        <div class="col-md-6 info-row">
                            <div class="profile-label">Mentorship & Projects</div>
                            <div class="profile-value">45+ UG Projects, 12 Master Thesis, 3 Ph.D. Scholars (Ongoing)</div>
                        </div>
                        <div class="col-md-12 info-row">
                            <div class="profile-label">Administrative Responsibilities</div>
                            <div class="profile-value">Member of Internal Quality Assurance Cell (IQAC), Exam Coordinator (Dept.)</div>
                        </div>
                    </div>
                </div>

                

                <div class="card-box">
                    <h6 class="section-title"><i class="fas fa-map-marked-alt me-2"></i>Residential Address</h6>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <p class="profile-label mb-1">Permanent Address</p>
                            <p class="profile-value">Flat 102, Gokul Dham, Near Station Road, Ahmedabad, Gujarat - 380001</p>
                        </div>
                        <div class="col-md-12">
                            <p class="profile-label mb-1">Current Residential Address</p>
                            <p class="profile-value">702, Silver Oak Residency, Vile Parle East, Mumbai - 400057</p>
                        </div>
                    </div>
                </div>

                <div class="card-box" style="background: #fdfaff; border-left: 5px solid var(--accent-purple);">
                    <h6 class="section-title text-dark"><i class="fas fa-phone-alt me-2"></i>Emergency Contact Details</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="profile-label">Spouse/Kin Name</div>
                            <div class="profile-value">Mrs. Anjali Shah</div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-label">Emergency Phone</div>
                            <div class="profile-value">+91 98211 54321</div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="profile-label">Family Physician</div>
                            <div class="profile-value">Dr. Mehta (+91 90000 00000)</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>