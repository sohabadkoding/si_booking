<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Booking</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_service WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Booking Service Sepdeda Motor CV.HONDA KARYA UTAMA</h2>
                        <h4>Jln.Prof.H.M. Yamin S,H No. 3, Simpang Kedai Ledang, Kisaran<br> Kisaran Timur, Kabupaten Asahan, Sumatera Utara, 21224</h4>
                        <hr>
                        <h3>DATA BOOKING</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                                </tr>
                                <tr>
                                    <td>Tipe</td> <td><?= $data['tipe'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                 <tr>
                                    <td>Jam</td> <td><?= $data['jam'] ?></td>
                                </tr>
                                <tr>
                                    <td>No Hp</td> <td><?= $data['no_hp'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td> <td><?= $data['tanggal'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jam</td> <td><?= $data['jam'] ?></td>
                                </tr>
                                 <tr>
                                    <td>Jenis Service</td> <td><?= $data['jenis_service'] ?></td>
                                </tr>
                                 <tr>
                                    <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                                </tr>
                                 <tr>
                                    <td>Metode</td> <td><?= $data['metode'] ?></td>
                                </tr>
                                 <tr>
                                    <td>Harga</td> <td><?= $data['harga'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Owner<strong></u><br>
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