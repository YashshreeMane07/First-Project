<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login | College Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #f3f4f6, #d1d5db);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background: #ffffff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      width: 100%;
    }

    .login-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
      text-align: center;
    }

    .form-control {
      border-radius: 10px;
      padding: 12px;
    }

    .btn-login {
      border-radius: 10px;
      padding: 10px;
      font-weight: 600;
    }

    .social-btn {
      border-radius: 10px;
      padding: 10px;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .social-icon {
      margin-right: 8px;
    }

    .divider {
      text-align: center;
      margin: 20px 0;
      position: relative;
    }

    .divider::before,
    .divider::after {
      content: "";
      position: absolute;
      width: 45%;
      height: 1px;
      background: #ccc;
      top: 50%;
    }

    .divider::before {
      left: 0;
    }

    .divider::after {
      right: 0;
    }
  </style>
</head>
<body>

<div class="login-container">
  <div class="login-title">Login to Your Account</div>

  <form action="validate.php" method="POST">
    <div class="mb-3">
      <input type="text" name="username" class="form-control" placeholder="Username" required />
    </div>
    <div class="mb-3">
      <input type="password" name="password" class="form-control" placeholder="Password" required />
    </div>
    <div class="d-grid">
      <button type="submit" class="btn btn-primary btn-login">Login</button>
    </div>
  </form>

  <div class="divider">or</div>

  <div class="d-grid">
    <button class="btn btn-danger social-btn"><i class="bi bi-google social-icon"></i> Sign in with Google</button>
    <button class="btn btn-primary social-btn"><i class="bi bi-facebook social-icon"></i> Sign in with Facebook</button>
  </div>

  <p class="text-center mt-3">
    Don't have an account? <a href="#">Register</a>
  </p>
</div>

<!-- Bootstrap Icons (for social icons) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
