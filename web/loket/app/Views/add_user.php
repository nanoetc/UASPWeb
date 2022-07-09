<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 Add User With Validation Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create"
    action="<?= ('/web/loket/public/submit-form') ?>">
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control">
      </div>
      <div class="form-group">
        <label>Keluhan</label>
        <input type="text" name="keluhan" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Update Data</button>
      </div>
    </form>
  </div>

</body>
</html>
