<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 CRUD - Edit User Demo</title>
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
    <form method="post" id="update_user" name="update_user"
    action="<?= ('/web/loket/public/update') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $user_obj['nama']; ?>">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="alamat" name="alamat" class="form-control" value="<?php echo $user_obj['alamat']; ?>">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="keluhan" name="keluhan" class="form-control" value="<?php echo $user_obj['keluhan']; ?>">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Save Data</button>
      </div>
    </form>
  </div>

</body>
</html>
