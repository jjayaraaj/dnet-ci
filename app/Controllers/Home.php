<?php

namespace App\Controllers;

class Home extends BaseController
{

    protected $session;


    function __construct()
    {

        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function index()
    {
        $data['test'] = '';
        // $this->session->remove('downloadFile');
        // $this->session->remove('broDownloadFile');
        return view('Home/index', $data);
    }
}
