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
        $item['enf_nom'] .= ' ' . $item['enf_prenom'];
        return $item;
    }, $data);

    load_view('index', $data);
}

function add()
{
    $params = array(
        'id' => $_GET['id'],
    );

    $item = one(heading('table', 'certificat'), $params);

    if ($item) load_view('add', $item);
    else redirect('certificat-home');
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

    redirect('declaration-home');
}

function save()
{
    $user = one('user', array('username' => session('u')));

    if ($user) {
        $params = $_POST;
        $params['user']        = $user['id'];
        $params['created_at']  = date('Y-m-d h:i:s');
        $params['updated_at']  = $params['created_at'];

        $new_decl = e(heading('table'), $params);

        if ($new_decl) {
            redirect('declaration-home');
        } else
            redirect('certificat-declaration', ['c' => $_POST['decl_numero']]);
    } else {
        redirect('certificat-declaration', ['c' => $_POST['decl_numero']]);
    }
}