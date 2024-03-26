<?php
class menuAdmin extends Controller
{
    public function index()
    {
        if (!$_SESSION['login']) {
            header('Location: ' . BASEURL . 'login');
            exit();
        } else {
            $data['judul'] = 'Menu Admin';
            $data['admin'] = $_SESSION['admin'];
            $this->view('templates/header', $data);
            $this->view('menuAdmin/index', $data);
            $this->view('templates/footer');
        }
    }

    public function logout()
    {
        if ($_SESSION['login']) {
            session_destroy();
            header('Location: ' . BASEURL . 'login');
            exit();
        }
    }
}
