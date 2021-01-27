<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success1">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Booking</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Nomor Polisi</label>
                            <div class="col-sm-3">
                                <input type="text" name="no_polisi" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Polisi" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Tipe</label>
                            <div class="col-sm-3 col-xs-9">
                                <select name="tipe" class="form-control">
                                    <option value="- Pilih -">- Pilih -</option>
                                    <option value="Revo Series">Revo Series</option>
                                    <option value="Blade Series">Blade Series</option>
                                    <option value="Beat Series">Supra X Series</option>
                                    <option value="Spacy Series">Spacy Series</option>
                                    <option value="Scoopy">Scoopy</option>
                                    <option value="Vario 125 Series">Vario 125 Series</option>
                                    <option value="Vario 150 Series">Vario 150 Series</option>
                                    <option value="ADV 150 Series">ADV 150 Series</option>
                                    <option value="PCX 150 Series">Pcx 150 Series</option>
                                    <option value="Genio Series">Genio Series</option>
                                    <option value="Verza Series">Verza Series</option>
                                    <option value="Mega Pro Series">Mega Pro Series</option>
                                    <option value="CB 150 R Series">CB 150 R Series</option>
                                    <option value="Tiger">Tiger</option>
                                    <option value="CBR 150">CBR 150</option>
                                    <option value="CBR 250">CBR 250</option>
                                    <option value="Supra X Helm In">Supra X Helm In</option>
                                    <option value="Sonic 150 R">Sonic 150 R</option>
                                    <option value="All New CB 150 R">All New CB 150 R</option>
                                    <option value="Supra GTR 150">Supra GTR 150</option>
                                    <option value="New CBR 250 RR">New CBR 250 RR</option>
                                    <option value="CRF 150 L">CRF 150 </option>
                                    <option value="PCX Hybrid">PCX Hybrid</option>
                                    <option value="CB 150 Verza">CB Verza</option>
                                </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-5">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Lengkap" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-5">
                                <input type="text" name="alamat"class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">No HP</label>
                            <div class="col-sm-3">
                                <input type="text" name="no_hp" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Hp" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal" class="form-control" id="inputPassword3" placeholder="Inputkan Tanggal" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Jam</label>
                            <div class="col-sm-3">
                                <input type="text" name="jam" class="form-control" id="inputPassword3" placeholder="Inputkan Jam" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Jenis_Service</label>
                            <div class="col-sm-3 col-xs-9">
								<select name="jenis_service" class="form-control">
                                      <option value="- Pilih -">- Pilih -</option>
									<option value="Service Lengkap">Service Lengkap</option>
									<option value="Service Ringan">Service Ringan</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->

						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Metode</label>
                            <div class="col-sm-4 col-xs-9">
                                <select name="metode" class="form-control">
                                      <option value="- Pilih -">- Pilih -</option>
                                    <option value="Datang Ke AHHAS">Datang Ke AHASS</option>
                                    <option value="ASK (AHHAS Service Kunjung)">ASK (AHHAS Service Kunjung)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Harga Service</label>
                            <div class="col-sm-3">
                                <input type="text" name="harga" class="form-control" id="inputPassword3" placeholder="Inputkan Harga">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-info1">
                                    <span class="fa fa-save"></span> Simpan Booking</button>
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
    $sql="INSERT INTO tb_service VALUES ('','$no_polisi','$tipe','$nama','$alamat','$no_hp','$tanggal','$jam','$jenis_service','$keterangan','$metode','$harga')";
    $query =  mysqli_query($koneksi, $sql) or die ("SQL Simpan Booking Error");
    if ($query){
        echo "<script>window.location.assign('?page=booking&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
