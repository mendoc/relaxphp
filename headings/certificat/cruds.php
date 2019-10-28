<?php
/**
 * Created by PhpStorm.
 * User: Dimitri
 * Date: 24/10/2019
 * Time: 13:25
 */


function home()
{
    $data = get_data();

    $data = array_map(function($item){

        $user = one('user', ['id' => $item['user']]);
        $item['user']  = $user['name'];
        $item['date']  = 'Le ' . $item['date'] . ' à ' . $item['heure'];
        return $item;
    }, $data);

    load_view('index', $data);
}

function add()
{
    load_view('add');
}

function printing()
{
    $params = array(
        'id' => $_GET['id']
    );

    $item = one(heading('table'), $params);

    load_page('print', $item);
}

function declaration()
{
    redirect('declaration-add', ['id' => $_GET['id']]);
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
                    $profile       = (int)$_POST['profile'];
                    switch ($profile) {
                        case 1:
                            $_SESSION['p'] = 'Administrateur';
                            break;
                        case 2:
                            $_SESSION['p'] = 'Sage Femme';
                            break;
                    }
                    //var_dump($user); dump($_SESSION);
                }
                redirect('user-home');
            }
            else redirect('user-edit', ['id' => $user['id']]);
        }
    } else {

        $user = one('user', array('username' => session('u')));

        if ($user) {
            $params = $_POST;
            $params['numero'] = 'C' . time();
            $params['user']   = $user['id'];

            $new_certif = e(heading('table'), $params);

            if ($new_certif) {
                redirect('certificat-home');
            } else
                redirect('certificat-add');
        } else {
            redirect('certificat-add');
        }
    }
}


function delete()
{

    $params = array(
        'id' => $_GET['id'],
    );

    $item = one(heading('table'), $params);

    if ($item) {
        d(heading('table'), $params);
    }

    redirect('certificat-home');
}