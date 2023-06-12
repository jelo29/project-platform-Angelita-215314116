<?php
namespace App\Controllers;

use App\Models\AsistenModel;

class AsistenController extends BaseController
{
    public function index()
    {
        $model = new AsistenModel();
        $data['asisten'] = $model->findAll();

        return view('AsistenView', $data);
    }
}
