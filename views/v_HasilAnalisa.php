<html>
<head>
  <title></title>
</head>
<body>

  <div class="well wells">
    <a class="kembali" href="?controller=Home&action=home">← Kembali</a>
    <br>
    <h1>HASIL ANALISA</h1>
    <?php 

//$checkGejala=array();

$listPenyakit = array();
$listSolusi = array();
    foreach ($Penyakit as $item) {
      $listPenyakit[]= $item['penyakit'];
      $listSolusi[]=$item['solusi'];
    }
    //print_r($listPenyakit);

$jumlahPenyakit = sizeof($listPenyakit);

for ($i=1; $i <= sizeof($listPenyakit) ; $i++) { 
  ${"HasilAkhirP".$i}=1;
}
    foreach ($listGejala as $item) {
      // "$"."p".$item['idPenyakit'] = $item['idGejala'];

      for ($i=1; $i <= sizeof($listPenyakit) ; $i++) { 
        if ($item['idPenyakit']==$i) {
          ${"p".$i}[]=$item['idGejala'];
        }
        else{
             ${"p".$i}[]=0;
        }
       
      }
      

   
    }


    //hitung penyakit 1
    for ($i=0; $i < sizeof($check) ; $i++) {
      for ($k=1; $k <= sizeof($listPenyakit)  ; $k++) { 
          for ($j=0; $j <sizeof(${"p".$k}) ; $j++) { 

             // print $check[$i]." dan ".$p1[$j]."<br>";
              if ($check[$i]==${"p".$k}[$j]) {
                ${"Hasilp".$k}[$i] = (1+$jumlahGejala*1/sizeof($listPenyakit))/(1+$jumlahGejala);
                break;
              }
              else{
                ${"Hasilp".$k}[$i] = (0+$jumlahGejala*1/sizeof($listPenyakit))/(1+$jumlahGejala);
              }
         }
       } 
        
    }


   
    for ($i=0; $i < sizeof($check) ; $i++) {
    for ($j=1; $j <= sizeof($listPenyakit) ; $j++) { 
       ${"HasilAkhirP".$j}*=${"Hasilp".$j}[$i];
     } 
     
  
    }


    $hasilAkhir = array();
   
   for ($i=0; $i < sizeof($listPenyakit) ; $i++) { 
     $hasilAkhir[$i] = ${"HasilAkhirP".($i+1)}*1/sizeof($listPenyakit);
   }
 

    for ( $i = 0; $i < sizeof($listPenyakit); $i++ ){
     for ($j = 0; $j < sizeof($listPenyakit); $j++ ){
      if ($hasilAkhir[$i] > $hasilAkhir[$j])
      {

       $temp = $listPenyakit[$i];
       $listPenyakit[$i] = $listPenyakit[$j];
       $listPenyakit[$j] = $temp;

       $temp2 = $listSolusi[$i];
       $listSolusi[$i] = $listSolusi[$j];
       $listSolusi[$j] = $temp2;

       $temp3 = $hasilAkhir[$i];
       $hasilAkhir[$i] = $hasilAkhir[$j];
       $hasilAkhir[$j] = $temp3;
     }
   }
 }



    ?>
<form class="form-horizontal" role="form" method="POST">
  <input class="hidden" name="controller" value="HasilAnalisa"></input>
  <input class="hidden" name="action" value="simpanHasilAnalisa"></input>
  <input class="hidden" name="kodeAnalisa" class="form-control" value="<?php echo $kodeAnalisa; ?>" >
  <input class="hidden" name="tanggalAnalisa" class="form-control" value="<?php echo $tanggalAnalisa; ?>" >
  <input class="hidden" name="namaAyam" class="form-control" value="<?php echo $namaAyam; ?>" >



    <div class="table-wrapper-2">

        <!--Table-->
        <table class="table table-responsive-md">
          <thead>
            <tr>
            <th class="th-lg">Rank</th>
              <th class="th-lg">Nama Penyakit</th>
              <th class="th-lg">nilai</th>
              

            </tr>
          </thead>
          <tbody>
            <?php  for ($i=0; $i < sizeof($listPenyakit) ; $i++) { ?>
            <tr>
              <td><?php echo $i+1; ?></td>
              <td><?php echo $listPenyakit[$i]; ?></td>
              <td><?php echo number_format($hasilAkhir[$i],10); ?></td>

            </tr>
            <?php } ?>
          </tbody>
        </table>
        <!--Table-->

      </div>


    <h3> Kesimpulan ayam mengidap penyakit : <?php echo " ".$listPenyakit[0]; ?> </h3>
    <input type="hidden" name="hasilAnalisa" value="<?php echo $listPenyakit[0]; ?>"></input>
    <h4>solusinya :<?php echo " ".$listSolusi[0]; ?></h4> <br>
     <button type="submit" class="btn btn-success btn-block">SIMPAN ANALISA</button>
</form>
 <!--  <?php foreach ($x as $item) {
 
      echo $item['Penyakit2']."<br>";
    
    } ?>  -->

   <!--  <?php print_r($x); ?> -->
  </div>
</body>
</html>
