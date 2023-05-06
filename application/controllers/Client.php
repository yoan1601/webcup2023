<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    public function index () {
        $this->listeClient();
    }

    public function sendClient($id) {

        $client = $this->dbClient->getClient($id);

        $infoClient['client'] = $client;

        $this->load->view('pages/detailClient', $infoClient);

    }

	public function listeClient() {

        $allUser = array();

        $allUser['allCustomer'] = $this->dbClient->getAllClients();

        $this->load->view('pages/client', $allUser);

    }

    public function intervalleClient($min = 0, $max = 599) {

        $allUser = array();

        $allUser['allCustomer'] = $this->dbClient->getInterClients($min, $max);

        //var_dump($allUser['allCustomer']);

        //$this->envoieClients($allUser);

        $this->load->view('pages/client', $allUser);
    }

}
