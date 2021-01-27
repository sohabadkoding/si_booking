<script src="assets/js/jquery.js"></script>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success1">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Nama Konsumen</label>
                            <div class="col-sm-5">
                                <input type="text" name="nama_konsumen" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Konsumen" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">No Handphone</label>
                            <div class="col-sm-5">
                                <input type="text" name="no_hp" class="form-control" id="inputEmail3" placeholder="Inputkan No Handphone Konsumen" required>
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-3">
                                <input type="text" name="nama_barang"class="form-control" id="inputEmail3" placeholder="Inputkan Nama Barang" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Pembelian</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_beli" class="form-control" id="inputEmail3" placeholder="Tanggal Pembelian" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pengantar" class="col-sm-3 control-label">Harga Barang (IDR)</label>
                            <div class="col-sm-2">
                                <input type="text" step="any" name="harga" class="form-control" id="jumlah" value="0">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Jumlah Barang</label>
                            <div class="col-sm-3">
                                <input type="text" step="any" name="jumlah" class="form-control" id="harga" value="0" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Total Harga (IDR)</label>
                            <div class="col-sm-3">
                                <input type="number" name="total" class="form-control" id="total" readonly value="0">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info1">
                                    <span class="fa fa-save"></span> Simpan Data Penjualan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <a href="?page=sukucadang&actions=tampil" class="btn btn-danger btn-sm">Kembali Ke Data Penjualan Suku Cadang</a>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
 $("#harga").keyup(function(){   
   var a = parseInt($("#harga").val());
   var b = parseInt($("#jumlah").val());
   var c = a*b;
   $("#total").val(c);
 });
 
 $("#harga").keyup(function(){
   var a = parseInt($("#harga").val());
   var b = parseInt($("#jumlah").val());
   var c = a*b;
   $("#total").val(c);
 });
</script>

<?php
if($_POST){
    //Ambil data dari form
    $nama_konsumen=$_POST['nama_konsumen'];
    $no_hp=$_POST['no_hp'];
    $nama_barang=$_POST['nama_barang'];
    $tgl_beli=$_POST['tgl_beli'];
    $harga=$_POST['harga'];
    $jumlah=$_POST['jumlah'];
    $total=$_POST['total'];
    //buat sql
    $sql="INSERT INTO tb_sukucadang VALUES ('','$nama_konsumen','$no_hp','$nama_barang','$tgl_beli','$harga','$jumlah','$total')";
    $query =  mysqli_query($koneksi, $sql) or die ("SQL Simpan Booking Error");
    if ($query){
        echo "<script>window.location.assign('?page=sukucadang&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }
?>