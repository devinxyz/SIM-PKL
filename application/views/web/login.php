<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | PKL SMK NEGERI 1 PADAHERANG</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: midnightblue;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 15px;
    }

    .login-container {
      width: 100%;
      max-width: 380px;
      background-color: white;
      border-radius: 20px;
      padding: 35px 25px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
    }

    .login-header {
      text-align: center;
      margin-bottom: 25px;
    }

    .login-header h4 {
      font-weight: 600;
      color: #333;
    }

    .form-control {
      font-size: 1rem;
      padding: 10px 40px 10px 15px;
      border-radius: 30px;
    }

    .form-control-feedback,
    .password-toggle {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      color: #333;
      font-size: 1rem;
    }

    .form-control-feedback {
      right: 15px;
    }

    .password-toggle {
      right: 15px;
      cursor: pointer;
    }

    .position-relative {
      position: relative;
    }

    .btn-primary {
      font-size: 1rem;
      padding: 10px;
      background-color: #007BFF;
      border: none;
      border-radius: 30px;
      transition: 0.3s;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    @media (max-width: 576px) {
      .login-container {
        padding: 25px 20px;
      }
    }
  </style>
</head>
<body>

  <div class="login-container">
    <div class="login-header">
      <img src="<?= base_url('assets/logo.png') ?>" alt="Logo" width="90">
      <?php echo $this->session->flashdata('msg'); ?>
    </div>

    <form action="" method="post">
      <div class="form-group position-relative">
        <input type="text" class="form-control" name="username" placeholder="NIS / Username" required>
        <span class="form-control-feedback"><i class="fas fa-user"></i></span>
      </div>

      <div class="form-group position-relative">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        <i class="fas fa-eye-slash password-toggle" id="togglePassword" onclick="togglePasswordVisibility()"></i>
      </div>

      <button type="submit" name="btnlogin" class="btn btn-primary btn-block">LOGIN</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function togglePasswordVisibility() {
      const passwordInput = document.getElementById("password");
      const passwordToggleIcon = document.getElementById("togglePassword");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggleIcon.classList.replace("fa-eye-slash", "fa-eye");
      } else {
        passwordInput.type = "password";
        passwordToggleIcon.classList.replace("fa-eye", "fa-eye-slash");
      }
    }
  </script>
</body>
</html>
