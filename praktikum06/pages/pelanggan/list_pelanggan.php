<?php 
    require_once '../../database/dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pelanggan";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_pelanggan.php" role="button">Create Pelanggan</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Produk ID</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Nama Pemesan</th>
                    <th>Alamat</th>
                    <th>No Handphone</th>
                    <th>Email</th>
                    <th>Jumlah Pesanan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['produk_id']?></td>
                        <td><?=$row['tanggal']?></td>
                        <td><?=$row['nama_pemesan']?></td>
                        <td><?=$row['alamat_pemesan']?></td>
                        <td><?=$row['no_hp']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['jumlah_pesanan']?></td>
                        <td>
<a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="edit_pelanggan.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="../../proses/pelanggan/delete_pelanggan.php?iddel=<?=$row['id']?>"
    onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?'))">Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
