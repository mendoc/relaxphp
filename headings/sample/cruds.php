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

    $item = one(heading('table'), $params);

    if ($item) {
        $data['item'] = $item;
        $data['fields'] = get_fields(heading('table'));

        if ($data['fields'] == false) {
            $data['fields'] = array();
            flash(l('return'), 'error');
        }
        load_view('edit', $data);
    } else {
        redirect('home');
    }
}

function add()
{
    generate_view('add');
}

function save()
{
    requiere_post();

    if (isset($_POST['id'])) {
        $item = one(heading('table'), ['id' => $_POST['id']]);

        if ($item) {
            $res = e(heading('table'), $_POST, $item['id']);
            if ($res) {
                $message = 'Les informations ' . (heading('male') ? (apostrophe(heading('singular')) ? 'de l\'' : 'du ') : 'de la ') . heading('singular') . ' ont été modifiées avec succès';
                flash($message);
                redirect('home');
            } else {
                flash(l('return'), 'error');
                redirect('edit', ['id' => $item['id']]);
            }
        } else {
            $message = ucfirst(heading('singular')) . ' introuvable';
            flash($message, 'error');
            redirect('edit', ['id' => $item['id']]);
        }
    } else {
        $item = one(heading('table'), $_POST);

        if ($item) {
            $message = (heading('male') ? 'Cet ' : 'Cette ') . heading('singular') . ' existe déjà.';
            flash($message, 'error');
            redirect('add');
        }

        $new_item = e(heading('table'), $_POST);

        if ($new_item) {
            $message = (heading('male') ? (apostrophe(heading('singular')) ? 'L\'' : 'Le ') : 'La ') . heading('singular') . ' a été bien enregistré' . (heading('male') ? '' : 'e');
            flash($message);
            redirect('home');
        } else {
            flash(l('return'), 'error');
            redirect('add');
        }
    }
}

function delete()
{

    $params = array(
        'id' => $_GET['id'],
    );

    $user = one(heading('table'), $params);

    if ($user) {
        if (d(heading('table'), $params)) {
            $message = (heading('male') ? (apostrophe(heading('singular')) ? 'L\'' : 'Le ') : 'La ') . heading('singular') . ' a été bien supprimé' . (heading('male') ? '' : 'e');
            flash($message);
        } else {
            flash(l('return'), 'error');
        }
    } else {
        flash(l('return'), 'error');
    }

    redirect('home');
}