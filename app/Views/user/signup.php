<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi</title>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Custom CSS -->
  <style>
    body {
      background-color: #ffe6f2; 
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .register-box {
      width: 400px;
      margin: 20px;
    }
    .card {
      border-radius: 15px;
      border: none;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #ff66b2; 
      color: white;
      text-align: center;
      border-radius: 15px 15px 0 0;
      padding: 20px;
    }
    .card-header a {
      color: white;
      font-size: 24px;
      font-weight: bold;
      text-decoration: none;
    }
    .card-body {
      padding: 30px;
    }
    .form-control {
      border: 2px solid #ff66b2; 
      border-radius: 10px;
    }
    .input-group-text {
      background-color: #ff66b2;
      color: white;
      border: none;
    }
    .btn-primary {
      background-color: #ff66b2;
      border-color: #ff66b2;
      border-radius: 20px;
      padding: 10px 20px;
    }
    .btn-primary:hover {
      background-color: #ff99cc; 
      border-color: #ff99cc;
    }
    .icheck-primary input[type="checkbox"]:checked + label::before {
      background-color: #ff66b2; 
      border-color: #ff66b2;
    }
    a {
      color: #ff66b2;
    }
    a:hover {
      color: #ff99cc;
    }
  </style>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card">
    <div class="card-header text-center">
      <a href="#"><b>Register</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="/register/simpan" method="post">
        <?= csrf_field() ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="Username" placeholder="Username" value="<?= set_value('Username') ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="Email" placeholder="Email" value="<?= set_value('Email') ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="Password" placeholder="Password" value="<?= set_value('Password') ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="NamaLengkap" placeholder="Nama Lengkap" value="<?= set_value('NamaLengkap') ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="Alamat" placeholder="Alamat" value="<?= set_value('Alamat') ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-home"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
