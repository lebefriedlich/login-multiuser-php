<?php
class menuUser extends Controller
{
    public function index()
    {
        if (!$_SESSION['login']) {
            header('Location: ' . BASEURL . 'login');
            exit();
        } else {
            $data['judul'] = 'Menu User';
            $data['user'] = $_SESSION['user'];
            $this->view('templates/header', $data);
            $this->view('menuUser/index', $data);
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
