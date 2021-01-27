<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_service WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success1">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Booking</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
                         <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Nomor Polisi</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_polisi" value="<?=$data['no_polisi']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Polisi" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Tipe</label>
                            <div class="col-sm-9">
                                <input type="text" name="tipe" value="<?=$data['tipe']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tipe" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Lengkap" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">No HP</label>
                            <div class="col-sm-3">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Hp" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal" value="<?=$data['tanggal']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Tanggal" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Jam</label>
                            <div class="col-sm-9">
                                <input type="text" name="jam" value="<?=$data['jam']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Jam" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Jenis_Service</label>
                            <div class="col-sm-3 col-xs-9">
                                <select name="jenis_service" value="<?=$data['jenis_service']?>" class="form-control">
                                    <option value="Service Lengkap">Service Lengkap</option>
                                    <option value="Service Ringan">Service Ringan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Metode</label>
                            <div class="col-sm-3 col-xs-9">
                                <select name="metode" value="<?=$data['metode']?>" class="form-control">
                                    <option value="Datang Ke AHHAS">Datang Ke AHASS</option>
                                    <option value="ASK (AHHAS Service Kunjung)">ASK (AHHAS Service Kunjung)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Harga Service</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" value="<?=$data['harga']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Harga">
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
                    <a href="?page=booking&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Booking
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
  $no_polisi=$_POST['no_polisi'];
    $tipe=$_POST['tipe'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];
    $tanggal=$_POST['tanggal'];
    $jam=$_POST['jam'];
    $jenis_service=$_POST['jenis_service'];
    $keterangan=$_POST['keterangan'];
    $metode=$_POST['metode'];
    $harga=$_POST['harga'];
    //buat sql
    $sql="UPDATE tb_service SET no_polisi='$no_polisi',tipe='$tipe',nama='$nama',alamat='$alamat',no_hp='$no_hp',
	tanggal='$tanggal',jam='$jam',jenis_service='$jenis_service',keterangan='$keterangan',metode='$metode',harga='harga' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=booking&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



