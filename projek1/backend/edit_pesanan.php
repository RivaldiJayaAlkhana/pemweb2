<?php 
require_once '../database/dbkoneksi.php';
$id = $_GET['idedit'];
$sql = "SELECT * FROM pesanan WHERE id = ?";
$statement = $dbh->prepare($sql);
$statement->execute([$id]);
$result = $statement->fetch();
?>
            
<form method="POST" action="proses_pesanan.php">
<input type="hidden" name="idedit" value="<?= $result['id'] ?>">
  <div class="form-group row">
    <label for="produk_id" class="col-4 col-form-label">Produk ID</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="produk_id" name="produk_id" type="text" class="form-control" 
        value="<?= $result['produk_id'] ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama_pemesan" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="nama_pemesan" name="nama_pemesan" 
        value="<?= $result['nama_pemesan'] ?>" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="alamat_pemesan" name="alamat_pemesan" value="<?= $result['alamat_pemesan'] ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="no_hp" class="col-4 col-form-label">No Handphone</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="no_hp" name="no_hp" 
        value="<?= $result['no_hp'] ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="jumlah_pesanan" name="jumlah_pesanan" 
        value="<?= $result['jumlah_pesanan'] ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Update"/>
    </div>
  </div>
</form>
