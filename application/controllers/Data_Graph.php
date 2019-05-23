<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Graph extends CI_Controller
{
    public function view() {
        $graph = EasyRdf_Graph::newAndLoad('https://adit393270.000webhostapp.com/rdf/sdnbandung.rdf');

        $data['graph'] = $graph;

        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('graph_content', $data);
        $this->load->view('foot');
    }
}