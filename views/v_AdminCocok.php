<html>
<head>
  <title></title>
</head>
<body>

  <div class="well wells">
    <a class="kembali" href="?controller=Home&action=homeAdmin">← Kembali</a>
    <br>
    <form class="form-horizontal" role="form" method="POST">
      <input class="hidden" name="controller" value="Cocok"></input>
      <input class="hidden" name="action" value="tambahCocok"></input>
      <div class="form-group">
        <label class="control-label col-lg-3">Pilih Penyakit :</label>
        <div class="col-lg-9">
          <select class="form-control" name="penyakit">
            <?php foreach ($penyakits as $penyakit) {?>
              <option value="<?php echo $penyakit->idPenyakit; ?>"><?php echo $penyakit->penyakit; ?></option>
            <?php } ?>
          </select>
        </div>
      </div>

      <div class="table-wrapper-2">

        <!--Table-->
        <table class="table table-responsive-md">
          <thead>
            <tr>
              <th class="th-lg">Kode Gejala</th>
              <th class="th-lg">Nama Gejala</th>
              <th class="th-lg"></th>

            </tr>
          </thead>
          <tbody>
            <?php foreach ($gejalas as $gejala) {?>
              <tr>
                <td>G<?php echo $gejala->idGejala; ?></td>
                <td><?php echo $gejala->gejala; ?></td>
                <td><input value="<?php echo $gejala->idGejala; ?>" type="checkbox" name="gejala[]"></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <!--Table-->

      </div>
      <br>

      <button type="submit" class="btn btn-success btn-block">ANALISA</button>
    </form>
  </div>
</body>
</html>
