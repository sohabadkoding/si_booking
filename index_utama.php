<?php session_start();
//Aktifkan session

require 'config/koneksi.php'; ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SI Booking Service Sepeda Motor</title>
        <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Assets/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <style type="text/css">
            body {
                margin-top:70px;
            }

            .modalDialog {
                position: fixed;
                font-family: Arial, Helvetica, sans-serif;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: rgba(0,0,0,0.8);
                z-index: 99999;
                opacity:0;
                transition: opacity 200ms ease-in;
                pointer-events: none;
            }
            .modalDialog:target {opacity:1; pointer-events: auto;}
            .modalDialog > div {
                width: 400px;
                position: relative;
                margin: 10% auto;
                padding: 5px 20px 13px 20px;
                border-radius: 10px;
                background: #fff;
                background: linear-gradient(#fff, #aaa);
            }
            .close:hover { background:#00d9ff; }
            .close {
                background: #606061;
                color: #FFFFFF;
                line-height: 25px;
                position: absolute;
                text-align: center;
                top: -10px;
                right: -12px;
                width: 24px;
                text-decoration: none;
                font-weight: bold;
                border-radius: 12px;
                box-shadow: 1px 1px 3px #000;
            }

            .honda{
                background-color: #c9030b;
            }
            .active1{
                background-color: #970209;
            }
            .abu{
                background-color: #c9c9c9;
            }
            .panel-heading {
                padding: 10px 15px;
                border-bottom: 1px solid transparent;
                border-top-left-radius: 3px;
                border-top-right-radius: 3px;
                background-color: #c9c9c9;
                color: #000000;
            }
            .panel-success1 {
                border-color: #c9c9c9;
            }
            .btn-info1 {
                color: #fff;
                background-color: #c9030b;
                border-color: #97020;
            }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        </style>
    </head>
    <body>

        <?php //mengambil file menu.php
        require 'akun.php';
        ?>

        <?php //mengambil file menu.php
        require 'menu.php';
        ?>

        <?php //mengambil file menu.php
        require 'content_admin.php';
        ?>


        <?php //mengambil file menu.php
        require 'footer.php';
        ?>

        <script src="Assets/js/jquery.js" type="text/javascript"></script>
        <script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="Assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>

        <script type="text/javascript" >
                $(function () {
                    $('#dtskripsi').dataTable();
                });
    </script>

    </body>

    </html>