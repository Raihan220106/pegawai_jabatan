<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;
use App\Models\PegawaiModel;
use CodeIgniter\HTTP\ResponseInterface;

class PegawaiController extends BaseController
{
    protected $modelpegawai;

    public function __construct()
    {
        $this->modelpegawai= new PegawaiModel();
    }

    public function index()
    {
        $data['pegawai'] = $this->modelpegawai->getPegawaiwithJabatan();
        return view('pegawai/index',$data);
    }

     public function show($id)
    {
        //
    }
    
     public function create()
    {
        $modelJabatan = new JabatanModel();
        $data['jabatan'] = $modelJabatan->findAll();
        return view('pegawai/create',$data);
    }

     public function store()
    {
        $data = [
            'nama_pegawai' => $this->request->getPost('nama_pegawai'),
            'alamat' => $this ->request->getPost('alamat'),
            'telepon' => $this ->request->getPost('telepon'),
            'jabatan_id' => $this ->request->getPost('jabatan_id'),
        ];

        $this->modelpegawai->save($data);
        return redirect()->to('pegawai');
    }

     public function edit($id)
    {
        $modelJabatan = new JabatanModel();
        $data['jabatan'] = $modelJabatan->findAll();
        $data['pegawai'] = $this->modelpegawai->find($id);
        return view('/pegawai/edit', $data);  
    }

    public function update($id)
{
    $data = [
        'nama_pegawai' => $this->request->getPost('nama_pegawai'),
            'alamat' => $this ->request->getPost('alamat'),
            'telepon' => $this ->request->getPost('telepon'),
            'jabatan_id' => $this ->request->getPost('jabatan_id'),
    ];

    $this->modelpegawai->update($id, $data);
    return redirect()->to('/pegawai');
}


     public function delete($id)
    {
        $this->modelpegawai->delete($id);
         return redirect()->to('pegawai');
    }
  
}
