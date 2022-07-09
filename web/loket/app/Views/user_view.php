<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 CRUD App Example - positronx.io</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?php echo ('/web/loket/public/index') ?>">Home</a>
        <a class="nav-link" href="<?php echo ('/web/loket/public/users-list') ?>">Loket</a>
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="#">Kontak</a>
    </div>
  </div>
</nav>
<br>
    <div class="d-flex justify-content-end">
        <a href="<?php echo ('/web/loket/public/user-form') ?>" class="btn btn-success mb-2">Add User</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>User Id</th>
             <th>nama</th>
             <th>alamat</th>
             <th>keluhan</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($users): ?>
          <?php foreach($users as $user): ?>
          <tr>
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['nama']; ?></td>
             <td><?php echo $user['alamat']; ?></td>
             <td><?php echo $user['keluhan']; ?></td>
             <td>
              <a href="<?php echo ('/web/loket/public/detail-view/'.$user['id']);?>" class="btn btn-success btn-sm">panggil</a>
              <a href="<?php echo ('/web/loket/public/edit-view/'.$user['id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo ('/web/loket/public/delete/'.$user['id']);?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>
<div class="col-12 bg-dark">
<footer>
    <p class="badge bg-dark">&copy;2022 - Universitas Pelita Bangsa<p>
</footer>
</div>
</body>
</html>
