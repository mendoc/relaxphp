<?php

function home()
{
    push_data();
}

function edit()
{
    $params = array(
        'id' => $_GET['id'],
    );

    $user = one(heading('table'), $params);

    if ($user) {
        load_view('edit', $user);
    } else {
        redirect('user-home');
    }

}

function add()
{
    load_view('add');
}

function login()
{
    load_page('login');
}

function logout()
{
    $_SESSION = [];
    redirect('user-login');
}

function verify()
{
    requiere_post();

    $params = array(
        'username' => $_POST['username'],
        'pass' => md5($_POST['password'])
    );

    $user = one(heading('table'), $params);

    if ($user) {
        switch ($user['profile']) {
            case 1:
                $_SESSION['p'] = 'Administrateur';
                break;
            case 2:
                $_SESSION['p'] = 'Sage Femme';
                break;
            case 3:
                $_SESSION['p'] = 'Major';
                break;
        }
        $_SESSION['u'] = $user['username'];
        $_SESSION['n'] = $user['name'];
        $_SESSION['session_token'] = md5(uniqid(time()));

        redirect('user-home');
    }
    redirect('user-login');
}

function save()
{
    requiere_post();

    if (isset($_POST['id'])) {

        $params = array(
            'id' => $_POST['id']
        );
        $user = one(heading('table'), $params);

        if ($user) {
            if (!isset($_POST['pass']) or empty($_POST['pass'])) {
                unset($_POST['pass']);
            } else {
                $_POST['pass'] = md5($_POST['pass']);
            }
            $res = e(heading('table'), $_POST, $user['id']);
            if ($res) {
                if ($user['username'] == $_SESSION['u']) {
                    $_SESSION['n'] = $_POST['name'];
                    $profile = (int)$_POST['profile'];
                    switch ($profile) {
                        case 1:
                            $_SESSION['p'] = 'Administrateur';
                            break;
                        case 2:
                            $_SESSION['p'] = 'Sage Femme';
                            break;
                        case 3:
                            $_SESSION['p'] = 'Major';
                            break;
                    }
                    //var_dump($user); dump($_SESSION);
                }
                redirect('user-home');
            } else redirect('user-edit', ['id' => $user['id']]);
        }
    } else {

        $_POST['pass'] = md5($_POST['pass']);

        $params = array(
            'username' => $_POST['username'],
            'pass' => $_POST['pass']
        );

        $user = one(heading('table'), $params);

        if ($user) {

            redirect('user-home');
        }

        $new_user = e(heading('table'), $_POST);

        if ($new_user) {
            redirect('user-home');
        } else
            redirect('user-add');
    }
}

function delete()
{

    $params = array(
        'id' => $_GET['id'],
    );

    $user = one(heading('table'), $params);

    if ($user) {
        d(heading('table'), $params);
    }

    redirect('user-home');
}