<?php

namespace App\Controllers;
use App\Models\PenggunaModel;

class Masuk extends BaseController
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
        if (isset($_SESSION['idmasuk'])){
            return redirect()->to(base_url('dashboard'));
        }
        else{
            return view('Akses/login');
        }
    }
    public function aksesMasuk(){
        $username = $this->request->getVar('username');
        $pw = $this->request->getVar('password');
        $this->user->where('users.username', $username);
        $proses = $this->user->get()->getResult();
        // dd($proses);
        if ($proses[0]->username == $username && $proses[0]->password == $pw){
            $sesimasuk = [
                'idmasuk' => $proses[0]->id
            ];
            $this->sesi->set($sesimasuk);
            return redirect()->to(base_url('dashboard'));
        }
        else{
            $this->sesi->setFlashdata('error', 'maaf username/password yang anda masukan salah, silahkan coba lagi');
            return redirect()->to(base_url('login'));
        }
    }
}