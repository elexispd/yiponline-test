<?php 

// bootstrap.php
require 'vendor/autoload.php';
use Smarty\Smarty;

$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');


require_once 'classes/User.php';