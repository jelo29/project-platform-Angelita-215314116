<?php
namespace App\Controllers;
use App\Models\Asistenmodell;
class AsistenControllerr extends BaseController
{
  protected $model;

    public function index()
    {
        $model = new Asistenmodell();
        $data['asisten'] = $model->findAll();

        return view('asistenView', $data);
    }
  public function simpan()
{
  helper('form');
// Memeriksa apakah melakukan submit data atau tidak.
  if (!$this->request->is('post')) {
  return view('/asisten/simpan');
}
 // Mengambil data yang disubmit dari form
$post = $this->request->getPost(['nim', 'nama', "praktikum", 
"ipk"]);
 // Mengakses Model untuk menyimpan data
$model = model(Asistenmodell::class);
$model->simpan($post);
return view('/asisten/success');
  

}
public function update()
    {
        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('/asisten/update');
        }

        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost([
            'nim', 'nama', 'praktikum', 'ipk'
        ]);

        // Mengakses Model untuk menyimpan data
        $model = model(Asistenmodell::class);
        $model->ubah($post);

        return redirect()->to('/asisten');
    }

    public function delete()
    {
        helper('form');
        if (!$this->request->is('post')) {
            return view('/asisten/delete');
        }

        // Mengambil data yang disubmit dari form
        $nim = $this->request->getPost('nim');
        $model = model(Asistenmodell::class);
        $model->hapus($nim);
        return redirect()->to('/asisten');
    }
    public function search()
    {
      if (!$this->request->is('post')){
        return view('asisten/search');
      }
      $nim = $this->request->getPost(['key']);

      $model = model(Asistenmodell::class);
      $asisten = $model->ambil($nim['key']);

      $data = ['hasil'=> $asisten];
      return view('asisten/search',$data);
    }

}