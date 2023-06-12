<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'login';
    protected $primaryKey = 'username';
    protected $allowedFields = ['username', 'password'];
    
    public function check($data)
    {
        return $this->where(['username' => $data['user'],'password' => $data['pwd']])->first();
    }
}