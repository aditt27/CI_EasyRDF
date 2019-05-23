<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
        $graph = EasyRdf_Graph::newAndLoad('https://adit393270.000webhostapp.com/rdf/sdnbandung.rdf');
        $graphArray = $graph->toRdfPhp();
        $aboutResource = array_keys($graphArray);

        $sekolahBasic = array();
        for($x=0;$x<=sizeof($aboutResource)-1;$x++) {
            $tempArray['sekolah'] = $graph->get($aboutResource[$x], "rdfs:label");
            $tempArray['akreditasi'] = $graph->get($aboutResource[$x], "<http://id.dbpedia.org/property/akreditasi>");
            $tempArray['tanggalBerdiri'] = $graph->get($aboutResource[$x], "<http://dbpedia.org/ontology/foundingDate>");
            $tempArray['linkSekolah'] = "/sekolah/".substr($aboutResource[$x], 26);
            $sekolahBasic[$x] = $tempArray;
        }

        //$dump = $graph->dump('text');
        //var_dump($dump);

        //var_dump($graph->get("http://sekolahbandung.com/SDN+001+MERDEKA+KOTA+BANDUNG", "rdfs:label"));

        //var_dump($graph->properties());

        //
        //var_dump($array);
        //var_dump(array_keys($array));

        $data['sekolahBasic'] = $sekolahBasic;

        $this->load->view('head');
        $this->load->view('navigation');
		$this->load->view('home_content', $data);
        $this->load->view('foot');
	}
}
