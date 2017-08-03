<?php
/*
 * Copyright: by Oleg Dudkin
 * Project: CMS "DON e-Commerce"
 * Front controller loader
 * Date: 11/5/2016
 * Time: 7:25 AM
 */

/******| Starting session |********/
session_start();

/*****| include system file |******/
require(dirname(__FILE__) . '/config.php');

require(ROOT . COMP . '/Autoload.php');
//require (ROOT.'/config/titles.php');
if (Functions::checkConfig(SETTINGS_FILE)) {
    require(ROOT . '/' . SETTINGS_FILE);

    /********| Create Router |*********/
    $router = new Router();

    /*******| Starting Router |********/
    $router->start();
} else {
    /********| Create Router installer |*********/
    $installer = new StartRouter();
    /*******| Run Router installer |********/
    $installer->run();
}

