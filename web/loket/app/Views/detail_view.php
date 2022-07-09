<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 CRUD App Example - positronx.io</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<fieldset>
</td></tr>
<header>
  <div class="card text-center">
  <div class="card-header">
    Harap menuju loket
  </div>
  <div class="card-body">
<div align="center" ></div>
<table width="480" border="3" align="center">
<tr>
<th width="283"><p align="center"><strong>ID Pasien</strong></p></th>
<td width="177"><p><?= $user_obj['id'];?></p></td>
</tr>
<tr>
<td><p align="center"><strong>nama pasien</strong></p></td>
<td><p><?= $user_obj['nama'];?></p></td>
</tr>
<tr><th><p align="center"><strong>alamat pasien</strong></p></th>
<td><p><?= $user_obj['alamat'];?></p></td>
</tr>
<tr>
  <td><p align="center"><strong>keluhan</strong></p></td>
  <td><p>
    <?= $user_obj['keluhan'];?>
  </p></td>
</tr>
<tr>
  <td><div align="center"><strong>Aksi</strong></div></td>
  <td><a href="<?php echo ('/web/loket/public/delete/'.$user_obj['id']);?>" class="btn btn-danger btn-sm">selesai</a>
</tr>
</table>
</div>
</fieldset>
</body>
</html>
