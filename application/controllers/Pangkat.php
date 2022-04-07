<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pangkat extends CI_Controller
{
    public function index()
    {
        $this->load->view('pangkat');
    }

    public function hitung()
    {
        $data['bil1'] = $this->input->post('bil1');
        $data['bil2'] = $this->input->post('bil2');

        if ($data['bil1'] == '' || $data['bil2'] == '') {
            $data['hasil'] = 'Please fill both forms.';
        } else {
            $data['hasil'] = pow($data['bil1'], $data['bil2']);
        }
        $this->load->view('pangkat', $data);
    }
}
