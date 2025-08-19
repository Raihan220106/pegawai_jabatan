<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;
use CodeIgniter\HTTP\ResponseInterface;

class JabatanController extends BaseController
{
    protected $modeljabatan;

    public function __construct()
    {
        $this->modeljabatan= new JabatanModel();
    }

    public function index()
    {
        $data['jabatan'] = $this->modeljabatan->findAll();
        return view('jabatan/index',$data);
    }

     public function show($id)
    {
        //
    }
    
     public function create()
    {
        return view('jabatan/create');
    }

     public function store()
    {
        $data = [
            'nama_jabatan' => $this->request->getPost('nama_jabatan'),
            'deskripsi_jabatan' => $this->request->getPost('deskripsi_jabatan'),
        ];

        $this->modeljabatan->save($data);
        return redirect()->to('jabatan');
    }

     public function edit($id)
    {
        $data['jabatan'] = $this->modeljabatan->find($id);
        return view('/jabatan/edit', $data);  
    }

    public function update($id)
{
    $data = [
        'nama_jabatan' => $this->request->getPost('nama_jabatan'),
        'deskripsi_jabatan' => $this->request->getPost('deskripsi_jabatan'),
    ];

    $this->modeljabatan->update($id, $data);
    return redirect()->to('/jabatan');
}


     public function delete($id)
    {
        $this->modeljabatan->delete($id);
         return redirect()->to('jabatan');
    }
  
    
}
