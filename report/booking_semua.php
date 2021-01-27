<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Booking</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Booking Service Sepdeda Motor CV.HONDA KARYA UTAMA</h2>
                        <h4>Jln.Prof.H.M. Yamin S,H No. 3, Simpang Kedai Ledang, Kisaran<br> Kisaran Timur, Kabupaten Asahan, Sumatera Utara, 21224</h4>
                        <hr>
                        <h3>DATA SELURUH BOOKING</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
								<th>No.</th>
                                <th width="25%">Tipe</th>
                                <th width="40%">Nama Lengkap</th>
                                <th width="40%">Alamat</th>
                                <th>No Hp</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Jenis Service</th>
                                <th>Keterangan</th>
                                <th>Metode Service</th>
                                <th>Harga</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_service";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                   <td><?= $nomor ?></td>
                                    <td><?= $data['tipe'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['no_hp'] ?></td>
                                    <td><?= $data['tanggal'] ?></td>
                                    <td><?= $data['jam'] ?></td>
                                    <td><?= $data['jenis_service'] ?></td>
                                    <td><?= $data['keterangan'] ?></td>
                                    <td><?= $data['metode'] ?></td>
                                    <td><?= $data['harga'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="15" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u class="text-right">Owner<strong></u><br>
                                        Ngadibon
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>