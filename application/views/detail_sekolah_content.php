<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<!-- Page Content -->
<div class="container" style="padding-top: 10px; padding-bottom: 100px">

    <div class="jumbotron">
        <h1 class="font-weight-light"><?php echo $dataSekolah['label']?></h1>
    </div>

    <div class="card">
        <div class="card-header">rdf:type</div>
        <div class="card-body"><a href="<?php echo $dataSekolah['rdftype']?>"><?php echo $dataSekolah['rdftype']?></a></div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">Lokasi Sekolah</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">Alamat    :</div>
                <div class="col-md-10"><a><?php echo $dataSekolah['alamat']?></a></div>
            </div>
            <div class="row">
                <div class="col-md-2">Kelurahan    :</div>
                <div class="col-md-10">
                    <a href="<?php echo $dataSekolah['kelurahan']?>">
                        <?php
                            $a = substr($dataSekolah['kelurahan'],31);
                            $a = explode(",", $a);
                            echo $a[0]?>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">Kecamatan    :</div>
                <div class="col-md-10">
                    <a href="<?php echo $dataSekolah['kecamatan']?>">
                        <?php
                        $a = substr($dataSekolah['kecamatan'],31);
                        $a = explode(",", $a);
                        echo $a[0]?>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">Kota         :</div>
                <div class="col-md-10"><a href="<?php echo $dataSekolah['kota']?>"><?php echo substr($dataSekolah['kota'],28)?></a></div>
            </div>
            <div class="row">
                <div class="col-md-2">Provinsi     :</div>
                <div class="col-md-10"><a href="<?php echo $dataSekolah['provinsi']?>"><?php echo substr($dataSekolah['provinsi'],28)?></a></div>
            </div>
            <div class="row">
                <div class="col-md-2">Negara       :</div>
                <div class="col-md-10"><a href="<?php echo $dataSekolah['negara']?>"><?php echo substr($dataSekolah['negara'],28)?></a></div>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">Nomor Statistik Sekolah</div>
        <div class="card-body"><?php echo $dataSekolah['nss']?></div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">Nomor Pokok Sekolah Nasional</div>
        <div class="card-body"><?php echo $dataSekolah['npsn']?></div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">Akreditasi</div>
        <div class="card-body"><?php echo $dataSekolah['akreditasi']?></div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">Jumlah Guru</div>
        <div class="card-body"><?php echo $dataSekolah['jumlahGuru']?></div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">Jumlah Ruang Kelas</div>
        <div class="card-body"><?php echo $dataSekolah['jumlahRuangKelas']?></div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">Jumlah Murid</div>
        <div class="card-body"><?php echo $dataSekolah['jumlahMurid']?></div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">Nama Kepala Sekolah</div>
        <div class="card-body"><?php echo $dataSekolah['kepsek']?></div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">Kurikulum</div>
        <div class="card-body"><?php echo $dataSekolah['kurikulum']?></div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">Tanggal Berdiri</div>
        <div class="card-body"><?php echo $dataSekolah['tanggalBerdiri']?></div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">Tipe Sekolah</div>
        <div class="card-body"><a href="<?php echo $dataSekolah['tipeSekolah']?>"><?php echo substr($dataSekolah['tipeSekolah'],31)?></a></div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">Graph</div>
        <div class="card-body"><?php echo $graph ?></div>
    </div>

</div>
<!-- /.container -->
