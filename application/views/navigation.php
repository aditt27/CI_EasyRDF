<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Info SD Negeri Bandung</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Download
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="https://adit393270.000webhostapp.com/rdf/sdnbandung.rdf">RDF/XML</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/data_graph/">Data Graph</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
