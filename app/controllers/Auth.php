<?php
class Auth extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }

    public function login()
    {
        if (isset($_POST['login'])) {
            $loginResult = $this->model('authModel')->login($_POST);

            if ($loginResult) {
                if ($loginResult['role'] == 'Admin') {
                    $_SESSION['login'] = true;
                    $_SESSION['admin'] = $loginResult;
                    header('Location: ' . BASEURL . 'menuAdmin');
                } else {
                    $_SESSION['login'] = true;
                    $_SESSION['user'] = $loginResult;
                    header('Location: ' . BASEURL . 'menuUser');
                }
            } else {
                Flasher::setFlash('Your username or password is incorrect. ', 'please try again', 'danger');
                header('Location: ' . BASEURL . 'login');
                exit;
            }
        }
    }
}
