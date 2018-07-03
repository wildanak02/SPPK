<html>
<head>
  <title></title>
</head>
<body>

  <div class="well wells">
    <a class="kembali" href="?controller=Analisa&action=home">← Kembali</a>
    <br>
    <h1>HASIL ANALISA</h1>
    <?php

    /*$jumlahP=0;

    foreach ($jumlahPenyakit as $item) {
      $jumlahP=$item["jumlahPenyakit"];
    }

    for ($i=1; $i < $jumlahP+1 ; $i++) {

       "$"."p".$i;
       "$"."Hasilp".$i;
      foreach ($listGejala as $item) {

     "$"."p".$item['idPenyakit'] = implode(" ", $item['idGejala']);
     }
   }

   print_r($p1);*/





    $p1 = array();
    $p2 = array();
    $p3 = array();
    $p4 = array();
    $p5 = array();
    $p6 = array();
    $checkGejala=array();

    $Hasilp1 = array();
    $Hasilp2 = array();
    $Hasilp3 = array();
    $Hasilp4 = array();
    $Hasilp5 = array();
    $Hasilp6 = array();

    $HasilAkhirP1 = 1;
    $HasilAkhirP2 = 1;
    $HasilAkhirP3 = 1;
    $HasilAkhirP4 = 1;
    $HasilAkhirP5 = 1;
    $HasilAkhirP6 = 1;

    //$penanda = 1;
$listPenyakit = array();
$listSolusi = array();
    foreach ($Penyakit as $item) {
      $listPenyakit[]= $item['penyakit'];
      $listSolusi[]=$item['solusi'];
    }
    //print_r($listPenyakit);


    foreach ($listGejala as $item) {
      // "$"."p".$item['idPenyakit'] = $item['idGejala'];




     if ($item['idPenyakit']==1) {
        $p1[]=$item['idGejala'];
     }
       else if ($item['idPenyakit']==2) {
        $p2[]=$item['idGejala'];

      }
       else if ($item['idPenyakit']==3) {
        $p3[]=$item['idGejala'];

      }
       else if ($item['idPenyakit']==4) {
        $p4[]=$item['idGejala'];

      }
       else if ($item['idPenyakit']==5) {
        $p5[]=$item['idGejala'];

      }
      else if ($item['idPenyakit']==6) {
        $p6[]=$item['idGejala'];

      }
     // $penanda++;
    }


    //hitung penyakit 1
    for ($i=0; $i < sizeof($check) ; $i++) {
         for ($j=0; $j <sizeof($p1) ; $j++) {

             // print $check[$i]." dan ".$p1[$j]."<br>";
              if ($check[$i]==$p1[$j]) {
                $Hasilp1[$i] = (1+20*1/6)/(1+20);
                break;
              }
              else{
                $Hasilp1[$i] = (0+20*1/6)/(1+20);
              }
         }
    }

      //hitung penyakit 2
    for ($i=0; $i < sizeof($check) ; $i++) {
         for ($j=0; $j <sizeof($p2) ; $j++) {

             // print $check[$i]." dan ".$p1[$j]."<br>";
              if ($check[$i]==$p2[$j]) {
                $Hasilp2[$i] = (1+20*1/6)/(1+20);
                break;
              }
              else{
                $Hasilp2[$i] = (0+20*1/6)/(1+20);
              }
         }
    }
      //hitung penyakit 1
    for ($i=0; $i < sizeof($check) ; $i++) {
         for ($j=0; $j <sizeof($p3) ; $j++) {

             // print $check[$i]." dan ".$p1[$j]."<br>";
              if ($check[$i]==$p3[$j]) {
                $Hasilp3[$i] = (1+20*1/6)/(1+20);
                break;
              }
              else{
                $Hasilp3[$i] = (0+20*1/6)/(1+20);
              }
         }
    }
      //hitung penyakit 1
    for ($i=0; $i < sizeof($check) ; $i++) {
         for ($j=0; $j <sizeof($p4) ; $j++) {

             // print $check[$i]." dan ".$p1[$j]."<br>";
              if ($check[$i]==$p4[$j]) {
                $Hasilp4[$i] = (1+20*1/6)/(1+20);
                break;
              }
              else{
                $Hasilp4[$i] = (0+20*1/6)/(1+20);
              }
         }
    }
      //hitung penyakit 1
    for ($i=0; $i < sizeof($check) ; $i++) {
         for ($j=0; $j <sizeof($p5) ; $j++) {

             // print $check[$i]." dan ".$p1[$j]."<br>";
              if ($check[$i]==$p5[$j]) {
                $Hasilp5[$i] = (1+20*1/6)/(1+20);
                break;
              }
              else{
                $Hasilp5[$i] = (0+20*1/6)/(1+20);
              }
         }
       }
          for ($i=0; $i < sizeof($check) ; $i++) {
         for ($j=0; $j <sizeof($p6) ; $j++) {

             // print $check[$i]." dan ".$p1[$j]."<br>";
              if ($check[$i]==$p6[$j]) {
                $Hasilp6[$i] = (1+20*1/6)/(1+20);
                break;
              }
              else{
                $Hasilp6[$i] = (0+20*1/6)/(1+20);
              }
         }
       }





    /*print_r($p3)."<br>";
    print_r($check);*/

    for ($i=0; $i < sizeof($check) ; $i++) {
     $HasilAkhirP1*=$Hasilp1[$i];
     $HasilAkhirP2*=$Hasilp2[$i];
     $HasilAkhirP3*=$Hasilp3[$i];
     $HasilAkhirP4*=$Hasilp4[$i];
     $HasilAkhirP5*=$Hasilp5[$i];
     $HasilAkhirP6*=$Hasilp6[$i];
    }


   /* echo "hasil akhir 1 = ".($HasilAkhirP1*1/6). "<br>";
    echo "hasil akhir 2 = ".($HasilAkhirP2*1/6). "<br>";
    echo "hasil akhir 3 = ".($HasilAkhirP3*1/6). "<br>";
    echo "hasil akhir 4 = ".($HasilAkhirP4*1/6). "<br>";
    echo "hasil akhir 5 = ".($HasilAkhirP5*1/6). "<br>";
    echo "hasil akhir 6 = ".($HasilAkhirP6*1/6). "<br>";*/

    $hasilAkhir = array();

    $hasilAkhir[0] = $HasilAkhirP1*1/6;
    $hasilAkhir[1] = $HasilAkhirP2*1/6;
    $hasilAkhir[2] = $HasilAkhirP3*1/6;
    $hasilAkhir[3] = $HasilAkhirP4*1/6;
    $hasilAkhir[4] = $HasilAkhirP5*1/6;
    $hasilAkhir[5] = $HasilAkhirP6*1/6;


    for ( $i = 0; $i < 6; $i++ ){
     for ($j = 0; $j < 6; $j++ ){
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

 //print_r($hasilAkhir);







/*
    rsort($hasilAkhir);
    print_r($hasilAkhir);
*/
    /*print_r($hasilAkhir);*/
   /* print_r($Hasilp1)."<br>";
    print_r($Hasilp2)."<br>";
    print_r($Hasilp3)."<br>";
    print_r($Hasilp4)."<br>";
    print_r($Hasilp5)."<br>";
    print_r($Hasilp6);*/
    //print_r($p5)."<br>";
    //print_r($check);


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
            <?php  for ($i=0; $i < 6 ; $i++) { ?>
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
