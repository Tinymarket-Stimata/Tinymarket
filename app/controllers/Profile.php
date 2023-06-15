<?php

class Profile extends Controller {
    public function index()
    {
        $this->view('templates/header');
        $this->view('profile/index');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Profile_model')->tambahDataUser($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan','success');
            header('Location: ' . BASEURL . '/profile');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/profile');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Profile_model')->hapusDataUser($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/profile');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/profile');
            exit;
        }
    }
    
}