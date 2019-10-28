<?php /** @noinspection PhpIncludeInspection */

function get($item)
{
    $config = get_config();

    return $config[$item];
}

function show($item)
{
    echo get($item);
}

function get_config()
{
    $json_str = file_get_contents('config/app.json');

    return json_decode($json_str, true);
}

function get_path()
{
    $page = 'home';

    if (!empty($_GET)) {
        $route = current(array_keys($_GET));
        if (empty(trim($_GET[$route]))) $page = $route;
    } else {
        $page = 'user-home';
    }

    $app = get_config();
    $parts = explode('-', $page);
    $head_req = $parts[0];
    $heading = '';
    $handler = '';

    foreach ($app['headings'] as $head_temp) {
        if ($head_req == $head_temp['name']) {
            $heading = $head_temp;
            break;
        }
    }

    if ($heading) {
        define('HEADING', $heading['name']);
        $cruds_path = './headings/' . $heading['dir'] . '/cruds.php';
        if (file_exists($cruds_path)) {
            require_once $cruds_path;
            if (count($parts) > 1 and !empty(trim($parts[1]))) {
                if (function_exists($parts[1])) {
                    $handler = $parts[1];
                }
            }
        }
    }
    return $handler;
}

function load_view($viewname, $data = array())
{
    $app       = get_config();
    $view_path = './headings/' . heading('name') . '/' . $viewname . '.php';

    require_once './themes/' . get('theme') . '/head.php';

    if (file_exists($view_path)) require_once $view_path;
    else require_once './themes/' . get('theme') . '/404_view.php';

    require_once './themes/' . get('theme') . '/footer.php';
}

function load_page($pagename, $data = array())
{
    $app = get_config();
    require_once './headings/' . heading('name') . '/' . $pagename . '.php';
}

function show_404()
{
    $app = get_config();
    require_once './themes/' . $app['theme'] . '/404.php';
}

function requiere_post()
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST'){
        show_404();
    }
}

function heading($param, $heading = '')
{
    $app = get_config();

    foreach ($app['headings'] as $head_temp) {
        if ($heading) {
            if ($heading == $head_temp['name']) {
                return (isset($head_temp[$param])) ? $head_temp[$param] : '';
            }
        } else {
            if (HEADING == $head_temp['name']) {
                return (isset($head_temp[$param])) ? $head_temp[$param] : '';
            }
        }
    }

    return '';
}

function route($handler, $params = array(), $heading = '')
{
    $qs = '';
    foreach ($params as $key => $value) $qs .= '&' . $key . '=' . $value;
    return '?' . ((empty($heading)) ? heading('name') : $heading) . '-' . $handler . $qs;
}

function redirect($route, $params = array())
{
    $qs = '';
    foreach ($params as $key => $value) $qs .= '&' . $key . '=' . $value;
    $link = root_url() . '?' . $route . $qs;
    header('Location: ' . $link);
    exit();
}

function dump($var)
{
    var_dump($var);
    die();
}

function set_case($text, $case)
{
    switch ($case) {
        case 'upper':
            return strtoupper($text);
        case 'lower':
            return strtolower($text);
        case 'first':
            return ucfirst($text);
        case 'words':
            return ucwords($text);
        default:
            return $text;
    }
}

function get_data()
{
    $data = array();

    $r = s(heading('table'));
    if ($r) $data = $r;

    return array_map(function ($item){
        $columns = heading('listing')['columns'];
        foreach ($columns as $label => $column) {
            if (is_array($column)){
                if (isset($column['matching'])){
                    if (isset($column['matching'][$item[$label]])) $item[$label] = $column['matching'][$item[$label]];
                }
                if (isset($column['format'])){
                    $item[$label] = date('d M Y',strtotime($item[$label]));
                }
                if (isset($column['case'])){
                    $item[$label] = set_case($item[$label], $column['case']);
                }

            }
        }
        return $item;
    }, $data);
}

function push_data($view = 'index')
{
    load_view($view, get_data());
}

function session($param)
{
    if (isset($_SESSION[$param]))
        return $_SESSION[$param];
    else
        return '';

}

function ends_with($text, $needle)
{
    return strpos($text, $needle, strlen($text)-1);
}

function root_url()
{
    $app = get_config();
    $root_url = (strpos($app['prod_url'], $_SERVER['HTTP_HOST'])) ? $app['prod_url'] : $app['root_url'];
    if (!ends_with($root_url, '/')) $root_url .= '/';
    return $root_url;
}

function theme_url()
{
    $app = get_config();
    return root_url() . 'themes' . '/' . $app['theme'] . '/';
}