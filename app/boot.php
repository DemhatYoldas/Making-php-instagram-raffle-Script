<?php
require_once 'config.php';
require_once 'helpers/helper.php';
require_once 'library/CrudPDO.php';
require_once 'asystem/App.php';
require_once 'asystem/mainModel.php';
require_once 'asystem/mainController.php';
require_once 'asystem/mainView.php';
require_once 'route.php';
require_once 'vendor/autoload.php';


spl_autoload_register(function($class_name){
    $modul=explode("Model",$class_name);

    if (file_exists($inc=DIRECTORY."/moduls/{$modul[0]}/model/{$class_name}.php"))
    {
        require_once $inc;
    }
});

