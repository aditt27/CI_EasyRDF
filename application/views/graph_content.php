<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Page Content -->
<div class="container" style="padding-top: 10px; padding-bottom: 100px">

    <!-- Heading Row -->
    <div class="row my-5">
        <div class="col-lg-12">
            <h1 class="font-weight-light">SD Negeri Bandung Data Graph</h1>
        </div>
    </div>
    <!-- /.row -->
    <?php echo $graph->dump() ?>

</div>
<!-- /.container -->