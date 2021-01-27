<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Penjualan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_sukucadang WHERE id='" . $_GET ['id'] . "'";
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
                        <h2>Sistem Informasi Booking Service Sepeda Motor CV.HONDA KARYA UTAMA</h2>
                        <h4>Jln.Prof.H.M. Yamin S,H No. 3, Simpang Kedai Ledang, Kisaran<br> Kisaran Timur, Kabupaten Asahan, Sumatera Utara, 21224</h4>
                        <hr>
                        <h3>DATA PENJUALAN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                                </tr>
                                <tr>
                                    <td>Nama Konsumen</td> <td><?= $data['nama_konsumen'] ?></td>
                                </tr>
                                <tr>
                                    <td>No Handphone</td> <td><?= $data['no_hp'] ?></td>
                                </tr>
                                 <tr>
                                    <td>Nama Barang</td> <td><?= $data['nama_barang'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Beli</td> <td><?= $data['tgl_beli'] ?></td>
                                </tr>
                                <tr>
                                    <td>Harga Barang (IDR)</td> <td><?= $data['harga'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jumlah</td> <td><?= $data['jumlah'] ?></td>
                                </tr>
                                 <tr>
                                    <td>Total Harga (IDR)</td> <td><?= $data['total'] ?></td>
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