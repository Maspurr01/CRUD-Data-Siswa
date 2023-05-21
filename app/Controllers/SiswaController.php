<?php

namespace App\Controllers;

use App\Models\SiswaModel;
use CodeIgniter\Controller;

class SiswaController extends Controller
{
    public function index()
    {
        $siswaModel = new SiswaModel();
        $data['siswa'] = $siswaModel->findAll();

        return view('siswa/index', $data);
    }

    public function create()
    {
        return view('siswa/create');
    }

    public function store()
    {
        $siswaModel = new SiswaModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat')
        ];

        $siswaModel->insert($data);

        return redirect()->to('/siswa');
    }

    public function edit($id)
    {
        $siswaModel = new SiswaModel();
        $data['siswa'] = $siswaModel->find($id);

        return view('siswa/edit', $data);
    }

    public function update($id)
    {
        $siswaModel = new SiswaModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat')
        ];

        $siswaModel->update($id, $data);

        return redirect()->to('/siswa');
    }

    public function delete($id)
    {
        $siswaModel = new SiswaModel();
        $siswaModel->delete($id);

        return redirect()->to('/siswa');
    }

    public function search()
    {
    $siswaModel = new SiswaModel();
    $keyword = $this->request->getGet('keyword');

    $data['siswa'] = $siswaModel->like('nama', $keyword)
                                ->orLike('kelas', $keyword)
                                ->orLike('alamat', $keyword)
                                ->findAll();

    return view('siswa/index', $data);
    }

}
