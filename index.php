<?php
    // error_reporting(E_ALL); // Error/Exeption engine, always use E_ALL

    // ini_set('ignore_repeated_errors', TRUE); // always use TRUE

    // ini_set('display_errors', FALSE); // Error/Exception display, use FALSE only in production

    // ini_set('log_errors', TRUE); //Error/Exception file logging engine

    // ini_set("error_log", "/Library/WebServer/Documents/expenseapp/php-error.log");
    error_log( "inicio de aplicacion web" );

    require_once 'libs/database.php';

    require_once 'libs/controller.php';
    require_once 'libs/view.php';
    require_once 'libs/model.php';
    require_once 'libs/app.php';

    require_once 'classes/sessionController.php';
    require_once 'classes/errors.php';
    require_once 'classes/success.php';
    
    require_once 'config/config.php';

    // include_once 'models/usermodel.php';

    $app = new App();
?>
