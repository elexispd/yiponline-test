<?php

require 'config/bootstrap.php';

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');

$smarty->display('register.tpl');