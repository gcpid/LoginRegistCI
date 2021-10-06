<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class Daftar extends BaseController
{
    protected $sesi, $user, $valid;
    public function __construct(){
        $this->sesi = session();
        $this->user = new PenggunaModel();
        $this->valid = \Config\Services::validation();
    }
    public function index()
    {
        $ringkas =[
            'validation' => $this->valid
        ];
      return view('Akses/register', $ringkas);
    }

    public function daftar(){
     if(!$this->validate([
         'fullname' => 'required',
         'username' => 'required',
         'email' => 'required',
         'password' => 'required'
     ])){
         return redirect()->to(base_url('register'))->withInput()->with('validation', '');
     }
     $sv_data = [
         'fullname' => $this->request->getVar('fullname'),
         'username' => $this->request->getVar('username'),
         'email' => $this->request->getVar('email'),
         'password' => $this->request->getVar('password'),
         'role' => 'user'
     ];
    //  dd($sv_data);
    $this->user->save($sv_data);
    $this->sesi->setFlashdata('sukses', 'Berhasil mendaftar');
    return redirect()->to(base_url('register'));
    }
    
}