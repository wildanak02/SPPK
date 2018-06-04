<html>
<head>
  <title></title>
</head>
<body>

  <div class="well wells">
    <a class="kembali" href="?controller=Home&action=homeAdmin">← Kembali</a>
    <br>
    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#tambahPenyakit">Tambah Penyakit</button>
    <br>
    <div class="table-wrapper-3">

      <!--Table-->
      <table class="table table-responsive-md">
        <thead>
          <tr>
            <th class="th-lg">ID Penyakit</th>
            <th class="th-lg">Nama Penyakit</th>
            <th class="th-lg">Solusi</th>
            <th class="th-lg"></th>
            <th class="th-lg"></th>

          </tr>
        </thead>
        <tbody>
            <?php foreach ($penyakits as $penyakit) {?>
          <tr>
            <td>P<?php echo $penyakit->idPenyakit; ?></td>
            <td><?php echo $penyakit->penyakit; ?></td>
            <td><?php echo $penyakit->solusi; ?></td>
            <td><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPenyakit" onclick="setData(<?php echo $penyakit->idPenyakit ?>)">Ubah</a></td>
            <td><a type="button" href="?controller=Penyakit&action=hapusPenyakit&idPenyakit=<?php echo $penyakit->idPenyakit; ?>" class="btn btn-danger">Hapus</a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <!--Table-->

    </div>



    <!-- Modal tambahpenyakit -->
<div id="tambahPenyakit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Penyakit</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST">
          <input class="hidden" name="controller" value="Penyakit"></input>
          <input class="hidden" name="action" value="tambahPenyakit"></input>
          <div class="form-group">
            <label class="control-label col-lg-4">Masukkan Nama Penyakit :</label>
            <div class="col-lg-8">
              <input type="text" class="form-control" name="penyakit" placeholder="Ketik disini.." >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-4">Masukkan Solusi :</label>
            <div class="col-lg-8">
              <input type="textbox" class="form-control" name="solusi" placeholder="Ketik disini.." >
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Tambahkan</button>
      </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal editpenyakit -->
<div id="editPenyakit" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Edit Penyakit</h4>
  </div>
  <div class="modal-body">
    <form class="form-horizontal" role="form" method="POST">
      <input class="hidden" name="controller" value="Penyakit"></input>
      <input class="hidden" name="action" value="editPenyakit"></input>
      <input class="hidden" id="idPenyakit" name="idPenyakit"></input>
      <div class="form-group">
        <label class="control-label col-lg-4">Masukkan Nama Penyakit :</label>
        <div class="col-lg-8">
          <input id="penyakit" type="text" class="form-control" name="penyakit" placeholder="Ketik disini.." >
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-4">Masukkan Solusi :</label>
        <div class="col-lg-8">
          <input id="solusi" type="textbox" class="form-control" name="solusi" placeholder="Ketik disini.." >
        </div>
      </div>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>

</div>
</div>





  </div>
</body>
</html>
<script type="text/javascript">
    function setData(id) {
        var idPenyakit = id;
        <?php

        foreach ($penyakits as $dat) { ?>
        if (idPenyakit == <?php echo $dat->idPenyakit; ?>) {

            $("#idPenyakit").val("<?php echo $dat->idPenyakit; ?>");
            $("#penyakit").val("<?php echo $dat->penyakit; ?>");
            $("#solusi").val("<?php echo $dat->solusi; ?>");
        }
        <?php
        }
       ?>
    }
</script>
