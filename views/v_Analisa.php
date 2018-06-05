<html>
<head>
  <title></title>
</head>
<body>

  <div class="well wells">
    <a class="kembali" href="?controller=Home&action=home">← Kembali</a>
    <br>
    <form class="form-horizontal" role="form" method="POST">

     <input class="hidden" name="controller" value="HasilAnalisa"></input>
     <input class="hidden" name="action" value="hasilAnalisa"></input>

     <div class="form-group">
      <label class="control-label col-lg-3">Kode Analisa :</label>
      <div class="col-lg-9">
        <?php foreach ($kodeAnalisa as $item) {

          $kode = $item["kodeAnalisa"]+1;
          ?>
          <input type="text" name="kodeAnalisa" class="form-control" value="<?php echo "KD00".$kode; ?>" readonly >
          <?php }  ?>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-3">Nama Ayam :</label>
        <div class="col-lg-9">
          <input type="text" name="namaAyam" class="form-control" placeholder="Ketik disini.." >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-3">Tanggal :</label>
        <div class="col-lg-9">
          <input type="date" name="tanggalAnalisa" class="form-control" placeholder="Ketik disini.." >
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
              <td><input value="<?php echo $gejala->idGejala; ?>" type="checkbox" name="checkGejala[]"></td>
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
