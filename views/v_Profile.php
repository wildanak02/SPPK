<html>
<head>
  <title></title>
</head>
<body>

  <div class="well wells">
    <a class="kembali" href="?controller=Home&action=home">← Kembali</a>
    <br>
    <form class="form-horizontal" role="form" method="GET">
      <input class="hidden" name="controller" value="Profile"></input>
      <input class="hidden" name="action" value="editUser"></input>
      <?php foreach ($users as $user) {?>
        <input type="text" name="idUser" class="hidden" value="<?php echo $user->idUser; ?>">
        <div class="form-group">
          <label class="control-label col-lg-3">Nama :</label>
          <div class="col-lg-9">
            <input type="text" name="nama" class="form-control" value="<?php echo $user->nama; ?>">
          </div>
        </div>
    <div class="form-group">
      <label class="control-label col-lg-3">Username :</label>
      <div class="col-lg-9">
        <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-lg-3">Password :</label>
      <div class="col-lg-9">
        <input type="text" name="password" class="form-control" value="<?php echo $user->password; ?>">
      </div>
    </div>
    <?php } ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <button type="submit" class="btn btn-block btn-success">Ubah</button>
  </form>
  </div>
</body>
</html>
