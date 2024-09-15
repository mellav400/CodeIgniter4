<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    body {
      background-color: #ffe6f2; /* Latar belakang pink lembut */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border: none;
      width: 100%;
      max-width: 500px;
    }
    .card-header {
      background-color: #ff66b2; 
      color: white;
      text-align: center;
      font-weight: bold;
      border-radius: 15px 15px 0 0;
    }
    .form-label {
      color: #ff66b2;
    }
    .form-control {
      border: 2px solid #ff66b2;
      border-radius: 10px;
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
  </style>
</head>
<body>

<div class="container">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        Edit User
      </div>
      <form action="/user/saveEdit<?= $user['UserID'] ?>" method="post">
        <?= csrf_field() ?>
        <div class="card-body">
          <div class="form-group mb-3">
            <label for="Username" class="form-label">Username</label>
            <input type="text" class="form-control" id="Username" name="Username" value="<?= set_value('Username', $user['Username']) ?>">
          </div>
          <div class="form-group mb-3">
            <label for="Email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="Email" name="Email" value="<?= set_value('Email', $user['Email']) ?>">
          </div>
          <div class="form-group mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password" name="Password" value="<?= set_value('Password', $user['Password']) ?>">
          </div>
          <div class="form-group mb-3">
            <label for="NamaLengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="NamaLengkap" name="NamaLengkap" value="<?= set_value('NamaLengkap', $user['NamaLengkap']) ?>">
          </div>
          <div class="form-group mb-3">
            <label for="Alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="Alamat" name="Alamat" value="<?= set_value('Alamat', $user['Alamat']) ?>">
          </div>
        </div>
        <div class="card-footer text-end">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
