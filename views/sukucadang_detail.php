<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Penjualan Suku Cadang</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tb_sukucadang WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nama Konsumen/td> <td><?= $data['nama_konsumen'] ?></td>
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
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=sukucadang&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali ke Data Peminjaman </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

