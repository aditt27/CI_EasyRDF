<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Page Content -->
<div class="container" style="padding-top: 10px; padding-bottom: 100px">

    <!-- Heading Row -->
    <div class="row my-5">
        <div class="col-lg-12">
            <h1 class="font-weight-light">Daftar SD Negeri di Bandung</h1>
            <p>Informasi seputar SD Negeri yang berada di bandung bersumber dari Kementerian Pendidikan dan Kebudayaan. Data disimpan dalam format RDF sebagai Linked Data.</p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div>
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th>Nama Sekolah</th>
                <th>Akreditasi</th>
                <th>Tanggal Berdiri</th>
                <th>Detail</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($sekolahBasic as $x) {
                echo "<tr>";
                echo "<td>".$x['sekolah']."</td>";
                echo "<td>".$x['akreditasi']."</td>";
                echo "<td>".$x['tanggalBerdiri']."</td>";
                echo "<td>"."<a type=\"button\" class=\"btn btn-primary\" href=\"".$x['linkSekolah']."\">Detail</a>"."</td>";
                echo "</tr>";
            } ?>
            </tbody>
        </table>
    </div>

</div>
<!-- /.container -->