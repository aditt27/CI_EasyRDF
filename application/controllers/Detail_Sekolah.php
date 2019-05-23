<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Sekolah extends CI_Controller
{
    public function view($sekolah) {
        $graph = EasyRdf_Graph::newAndLoad('https://adit393270.000webhostapp.com/rdf/sdnbandung.rdf');
        $linkResource = strval("http://sekolahbandung.com/".$sekolah);

        $tempArray['rdftype'] = $graph->get($linkResource, "rdf:type");
        $tempArray['label'] = $graph->get($linkResource, "rdfs:label");
        $tempArray['alamat'] = $graph->get($linkResource, "<http://dbpedia.org/ontology/address>");
        $tempArray['kota'] = $graph->get($linkResource, "<http://dbpedia.org/ontology/city>");
        $tempArray['provinsi'] = $graph->get($linkResource, "<http://dbpedia.org/ontology/province>");
        $tempArray['negara'] = $graph->get($linkResource, "<http://dbpedia.org/ontology/country>");
        $tempArray['nss'] = $graph->get($linkResource, "<http://id.dbpedia.org/property/nss>");
        $tempArray['npsn'] = $graph->get($linkResource, "<http://id.dbpedia.org/property/npsn>");
        $tempArray['email'] = $graph->get($linkResource, "foaf:mbox");
        $tempArray['akreditasi'] = $graph->get($linkResource, "<http://id.dbpedia.org/property/akreditasi>");
        $tempArray['jumlahGuru'] = $graph->get($linkResource, "<http://dbpedia.org/ontology/numberOfAcademicStaff>");
        $tempArray['jumlahRuangKelas'] = $graph->get($linkResource, "<http://dbpedia.org/ontology/numberOfClassrooms>");
        $tempArray['jumlahMurid'] = $graph->get($linkResource, "<http://dbpedia.org/ontology/numberOfStudents>");
        $tempArray['kepsek'] = $graph->get($linkResource, "<http://dbpedia.org/ontology/principal>");
        $tempArray['kurikulum'] = $graph->get($linkResource, "<http://id.dbpedia.org/property/kurikulum>");
        $tempArray['tanggalBerdiri'] = $graph->get($linkResource, "<http://dbpedia.org/ontology/foundingDate>");
        $tempArray['tipeSekolah'] = $graph->get($linkResource, "<http://dbpedia.org/ontology/campusType>");
        $tempArray['kelurahan'] = $graph->get($linkResource, "<http://dbpedia.org/ontology/village>");
        $tempArray['kecamatan'] = $graph->get($linkResource, "<http://dbpedia.org/ontology/district>");

        $data['dataSekolah'] = $tempArray;
        $data['graph'] = $graph->dumpResource($linkResource);

        $this->load->view('head');
        $this->load->view('navigation');
        $this->load->view('detail_sekolah_content',$data);
        $this->load->view('foot');
    }
}