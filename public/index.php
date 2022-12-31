<?php

require '../vendor/autoload.php';
require 'bootstrap.php';

try {

    $data = router();

    if(! isset($data['view']))
    {
        die('Erro na view!');
    }

    if(! file_exists(VIEWS . $data['view']))
    {
        die('Error 404');
    }

    if(isset($data['data']))
    {
        extract($data['data']);
    }

    $view = VIEWS . $data['view'];

    require VIEWS . 'master.php';

} catch (\Throwable $th) {
    
}