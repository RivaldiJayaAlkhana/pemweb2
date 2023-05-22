<?php require_once "class_bmi.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="mx-5 my-5">
    <h1 class="text-center">Data Pasien</h1>
    <div class="container">
<form method="POST">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="date" class="col-4 col-form-label">Umur</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-birthday-cake"></i>
          </div>
        </div> 
        <input id="umur" name="umur" placeholder="Masukkan Umur" type="text" class="form-control" required="required"> 
        <div class="input-group-append">
          <div class="input-group-text">tahun</div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" required="required" class="custom-control-input" value="Laki-laki"> 
        <label for="jk_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" required="required" class="custom-control-input" value="Perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="bb" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-dashboard"></i>
          </div>
        </div> 
        <input id="bb" name="bb" placeholder="Masukkan Berat Badan" type="text" class="form-control" required="required"> 
        <div class="input-group-append">
          <div class="input-group-text">Kg</div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tb" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-text-height"></i>
          </div>
        </div> 
        <input id="tb" name="tb" placeholder="Masukkan Tinggi Badan" type="text" class="form-control" required="required"> 
        <div class="input-group-append">
          <div class="input-group-text">Cm</div>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>

<div class="container">
  <table class="table">
    <thead class="table-primary">
      <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>Berat Badan</th>
        <th>Tinggi Badan</th>
        <th>Hasil BMI</th>
        <th>Keterangan</th>
      </tr>
      <?php
        if (isset($_POST['submit'])) {
          $nama = $_POST['nama'];
          $umur = $_POST['umur'];
          $jk = $_POST['jk'];
          $bb = $_POST['bb'];
          $tb = $_POST['tb'];
          $hasil = new Bmipasien($nama, $umur, $jk, $bb, $tb);
          $hasil->hasilBMI();
          $hasil->statusBMI();
      ?>
    </thead>
    <tbody class="table-bordered">
      <tr>
        <td><?= $hasil->nama; ?></td>
        <td><?= $hasil->umur; ?> th</td>
        <td><?= $hasil->jk; ?></td>
        <td><?= $hasil->berat; ?> Kg</td>
        <td><?= $hasil->tinggi; ?> Cm</td>
        <td><?= number_format($hasil->hasilBMI(), 1, '.', ','); ?></td>
        <td><?= $hasil->statusBMI(); ?></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>
</body>
</html>