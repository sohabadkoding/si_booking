<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top honda">

    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand" href="?page=utama">SI Booking Service Sepeda Motor CV.Honda Karya Utama</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active1"><a href="?page=utama">Home</a></li>

                    <style>
                        .dropdown:hover>.dropdown-menu{
                            display: block;
                        }
                    </style>

                    <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Honda<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=booking&actions=tampil">Booking Service</a></li>
                        <li><a href="?page=sukucadang&actions=tampil">Penjualan Suku Cadang</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">Reports<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=booking&actions=report">Laporan Data Booking</a></li>
						<li><a href="?page=sukucadang&actions=report">Laporan Data Penjualan Suku Cadang</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil">User</a></li>


                <?php } ?>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==2) { ?>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Honda<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=bkkonsumen&actions=tampil">Booking Service</a></li>
                        <li><a href="?page=skckonsumen&actions=tampil">Penjualan Suku Cadang</a></li>
                    </ul>
                </li>

                <?php } ?>


                <li><a href="?page=profil&actions=tampil">Profil</a></li>
                <li><a href="?page=about&actions=tampil">About</a></li>
                <li><a href="?page=kontak&actions=tampil">Contact</a></li>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
