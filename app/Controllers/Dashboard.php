<?php

namespace App\Controllers;
use App\Models\PenggunaModel;

class Dashboard extends BaseController
{
    protected $sesi, $user, $valid;
    public function __construct(){
        $this->sesi = session();
        $this->user = new PenggunaModel();
        $this->valid = \Config\Services::validation();
    }
    public function index()
    {
        $this->sesi;
        $cek_id = $_SESSION['idmasuk'];
        $this->user->where('users.id', $cek_id);
        $proses = $this->user->get()->getResult();
        $ringkas = [
            'data' => $proses
        ];
        return view('Dashboard/index', $ringkas);
    }
}
