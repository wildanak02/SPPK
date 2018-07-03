<html>
<head>
  <title></title>
</head>
<body>

  <div class="well wells">
    <?php if ($_SESSION['login']=='a'){?>
      <a class="kembali" href="?controller=Home&action=homeAdmin">← Kembali</a>
    <?php  }
    else {?>
      <a class="kembali" href="?controller=Home&action=home">← Kembali</a>
    <?php }?>

    <div class="table-wrapper-3">

      <!--Table-->
      <table class="table table-responsive-md">
        <thead>
          <tr>
            <th class="th-lg">ID Analisa</th>
            <th class="th-lg">Username</th>
            <th class="th-lg">Kode Analisa</th>
            <th class="th-lg">Nama Ayam</th>
            <th class="th-lg">Tanggal Analisa</th>
            <th class="th-lg">Hasil Analisa</th>
            <th class="th-lg"></th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($riwayats as $riwayat) {?>
            <tr>
              <td>A<?php echo $riwayat->idAnalisa; ?></td>
              <td><?php echo $riwayat->username; ?></td>
              <td><?php echo $riwayat->kodeAnalisa; ?></td>
              <td><?php echo $riwayat->namaAyam; ?></td>
              <td><?php echo $riwayat->tanggalAnalisa; ?></td>
              <td><?php echo $riwayat->hasil; ?></td>
              <td><a type="button" href="?controller=Riwayat&action=hapusAnalisa&idAnalisa=<?php echo $riwayat->idAnalisa; ?>" class="btn btn-danger">Hapus</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <!--Table-->

    </div>





</div>
</body>
</html>
