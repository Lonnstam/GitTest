<?php
session_start();

// Add your class dir to include path
set_include_path($_SERVER['DOCUMENT_ROOT'] . "mvctest/" . PATH_SEPARATOR . 
                 $_SERVER['DOCUMENT_ROOT'] . "mvctest/application/");

// You can use this trick to make autoloader look for commonly used "My.class.php" type filenames
spl_autoload_extensions('.class.php');

// Use default autoload implementation
spl_autoload_register();