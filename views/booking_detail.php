<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Booking Service</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tb_service WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nomor Polisi</td> <td><?= $data['no_polisi'] ?></td>
                        </tr>
                        <tr>
                            <td>Tipe Motor</td> <td><?= $data['tipe'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td> <td><?= $data['nama'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
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
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=booking&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali ke Data Booking </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

