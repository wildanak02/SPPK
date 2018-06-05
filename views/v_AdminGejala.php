<html>
<head>
  <title></title>
</head>
<body>

  <div class="well wells">
    <a class="kembali" href="?controller=Home&action=homeAdmin">← Kembali</a>
    <br>
    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#tambahGejala">Tambah Gejala</button>
    <br>
    <div class="table-wrapper-3">

      <!--Table-->
      <table class="table table-responsive-md">
        <thead>
          <tr>
            <th class="th-lg">ID Gejala</th>
            <th class="th-lg">Nama Gejala</th>
            <th class="th-lg"></th>
            <th class="th-lg"></th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($gejalas as $gejala) {?>
            <tr>
              <td>G<?php echo $gejala->idGejala; ?></td>
              <td><?php echo $gejala->gejala; ?></td>
            <td><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#editGejala" onclick="setData(<?php echo $gejala->idGejala ?>)">Ubah</a></td>
              <td><a type="button" href="?controller=Gejala&action=hapusGejala&idGejala=<?php echo $gejala->idGejala; ?>" class="btn btn-danger">Hapus</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <!--Table-->

    </div>



    <!-- Modal tambahGejala -->
    <div id="tambahGejala" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tambah Gejala</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" role="form" method="POST">
              <input class="hidden" name="controller" value="Gejala"></input>
              <input class="hidden" name="action" value="tambahGejala"></input>
              <div class="form-group">
                <label class="control-label col-lg-4">Masukkan Gejala :</label>
                <div class="col-lg-8">
                  <input type="textbox" class="form-control" name="gejala" placeholder="Ketik disini.." >
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



        <!-- Modal editGejala -->
        <div id="editGejala" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Gejala</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST">
                  <input class="hidden" name="controller" value="Gejala"></input>
                  <input class="hidden" name="action" value="editGejala"></input>
                  <input class="hidden" id="idGejala" name="idGejala"></input>
                  <div class="form-group">
                    <label class="control-label col-lg-4">Masukkan Gejala :</label>
                    <div class="col-lg-8">
                      <input type="textbox" class="form-control" id="gejala" name="gejala" placeholder="Ketik disini.." >
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Simpan</button>
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
        var idGejala = id;
        <?php

        foreach ($gejalas as $dat) { ?>
        if (idGejala == <?php echo $dat->idGejala; ?>) {

            $("#idGejala").val("<?php echo $dat->idGejala; ?>");
            $("#gejala").val("<?php echo $dat->gejala; ?>");
        }
        <?php
        }
       ?>
    }
</script>
