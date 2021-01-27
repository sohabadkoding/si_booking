<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_sukucadang WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success1">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Penjualan Suku Cadang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
                         <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Nama Konsumen</label>
                            <div class="col-sm-4">
                                <input type="text" name="nama_konsumen" value="<?=$data['nama_konsumen']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Konsumen" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">No Handphone</label>
                            <div class="col-sm-4">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>" class="form-control" id="inputEmail3" placeholder="Inputkan No Handphone" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-4">
                                <input type="text" name="nama_barang" value="<?=$data['nama_barang']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Barang" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Tanggal Beli</label>
                            <div class="col-sm-2">
                                <input type="date" name="tgl_beli" value="<?=$data['tgl_beli']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Harga (IDR)</label>
                            <div class="col-sm-3">
                                <input type="text" name="harga" value="<?=$data['harga']?>" class="form-control" id="jumlah" placeholder="Inputkan Harga Beli" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-2">
                                <input type="number" name="jumlah" value="<?=$data['jumlah']?>" class="form-control" id="harga" placeholder="Inputkan Tanggal" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Total (IDR)</label>
                            <div class="col-sm-3">
                                <input type="text" name="total" value="<?=$data['total']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Total" required>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info1">
                                    <span class="fa fa-edit"></span> Update Data Booking</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="panel-footer">
                    <a href="?page=sukucadang&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Booking
                    </a>
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
    $sql="UPDATE tb_sukucadang SET nama_konsumen='$nama_konsumen',no_hp='$no_hp',nama_barang='$nama_barang',tgl_beli='$tgl_beli',harga='$harga',jumlah='$jumlah',total='$total' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=sukucadang&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



