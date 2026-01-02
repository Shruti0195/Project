<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Login Page</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />

  <style>
    :root {
      --primary-green: #065f46;
      --dark-green: #065f46;
      --light-bg: #f2f7f3ff;
      --card-bg: #ffffff;
      --text-main: #1f2937;
      --text-muted: #6b7280;
    }

    body {
      min-height: 100vh;
      background-color: #065f46;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
      color: var(--text-main);
    }

    .main-container {
      background-color: var(--card-bg);
      border-radius: 24px;
      box-shadow:
        0 20px 40px rgba(0,0,0,0.15),
        0 10px 10px rgba(0,0,0,0.1);
      overflow: hidden;
      width: 100%;
      max-width: 780px;
      display: flex;
      min-height: 480px;
    }

    .left-section {
      flex: 1;
      padding: 3rem 2.5rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background-color: var(--light-bg);
      z-index: 1;
    }

    .right-section {
      flex: 1.1;
      background-image: url('../images/adminlogin.png');
      background-size: contain;
      background-position: center;
      background-repeat: no-repeat;
      background-color: var(--light-bg);
    }

    .brand-title {
      font-weight: 700;
      color: var(--dark-green);
      margin-bottom: 0.5rem;
      font-size: 2rem;
    }

    .brand-subtitle {
      color: var(--text-muted);
      font-size: 0.95rem;
      margin-bottom: 2rem;
    }

    .input-group-text {
      background: #f9f9f9;
      border: 1px solid #d1e7dd;
      border-right: none;
      border-radius: 12px 0 0 12px;
      color: var(--primary-green);
      padding-left: 1rem;
    }

    .form-control {
      border-radius: 0 12px 12px 0;
      padding: 0.9rem 1rem 0.9rem 0;
      border: 1px solid #d1e7dd;
      border-left: none;
      background-color: #f9fdf9;
      transition: all 0.3s;
      color: var(--text-main);
    }

    .form-control::placeholder {
      color: var(--text-muted);
    }

    .form-control:focus, .input-group-text {
      box-shadow: none;
      border-color: var(--primary-green);
      background-color: #ffffff;
      color: var(--dark-green);
    }

    .input-group:focus-within .input-group-text {
      border-color: var(--primary-green);
      color: var(--dark-green);
    }

    .btn-login {
      background-color: var(--primary-green);
      border: none;
      color: white;
      font-weight: 600;
      padding: 1rem;
      border-radius: 12px;
      width: 100%;
      margin-top: 1rem;
      transition: all 0.2s;
      box-shadow: 0 4px 6px rgba(80,157,129,0.5);
    }

    .btn-login:hover {
        color: white;
      background-color: var(--dark-green);
      transform: translateY(-2px);
      box-shadow: 0 8px 15px rgba(6,95,70,0.6);
    }

    .form-check-label {
      font-size: 0.85rem;
      color: var(--text-muted);
    }

    a {
      font-size: 0.85rem;
      color: var(--dark-green);
      font-weight: 600;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .main-container {
        flex-direction: column;
        max-width: 450px;
      }
      .right-section {
        display: none;
      }
      .left-section {
        padding: 3rem 2rem;
      }
    }
  </style>
</head>
<body>

  <div class="main-container">
    <div class="left-section">
        <h1 class="brand-title">Welcome Admin</h1>
        <p class="brand-subtitle">Please enter your details to sign in.</p>

        <form>
            <label class="form-label" style="font-weight:600; font-size: 0.9rem;">Username</label>
            <div class="input-group mb-4">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Enter username" />
            </div>
            
            <label class="form-label" style="font-weight:600; font-size: 0.9rem;">Password</label>
            <div class="input-group mb-4">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Enter password" />
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" />
                <label class="form-check-label" for="remember">Remember me</label>
              </div>
              <a href="#">Forgot Password?</a>
            </div>

            <button type="submit" class="btn btn-login">LOGIN</button>
        </form>
    </div>

    <div class="right-section"></div>
  </div>

</body>
</html>