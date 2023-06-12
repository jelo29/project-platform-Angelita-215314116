<?php

namespace App\Controllers;

use App\Models\loginmodel;
use App\Models\Asistenmodell;

class Login extends BaseController
{
    protected $model, $modelAsisten;

    public function __construct()
    {
        $this->model = new loginmodel();
        $this->modelAsisten = new Asistenmodell();
    }

    public function index()
    {

        $data = [
            'login' => $this->model->findAll(),
            'asisten' => $this->modelAsisten->findAll(),
        ];

        return view('login/loginpage', $data);
    }

    public function home()
    {
        $session = session();
        if ($session->has('pengguna')) {
            $item = $session->get('pengguna');
            if ($item == 'admin') {
                return view('login/home');
            } else {
                return view('login/loginpage');
            }
        } else {
            return view('login/loginpage');
        }
    }

    public function check()
    {
        $post = $this->request->getPost(['user', 'pwd']);
        $check = $this->model->check($post);
        if ($check > 0) { // untuk mengecek apakah username dan password sesuai yg diinginkan
            $session = session();
            $session->set('pengguna', $post['user']);
            return redirect()->to(base_url('asisten'));
        } else {
            return view('login/fail');
        }
    }

    public function logout()
    {
        $session = session();
        $session->remove('pengguna');
        return view('login/loginpage');
    }
}