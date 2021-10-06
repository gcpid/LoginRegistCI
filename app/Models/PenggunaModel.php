<?php
namespace App\Models;
use CodeIgniter\Model;

class PenggunaModel extends Model{
    protected $table = 'users';
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $allowedFields = ['fullname', 'username', 'email', 'password', 'role'];
}