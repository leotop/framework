<?php
/**
 * @author  Pixelbart
 * @version 1.0
 */

//--------------------------------------------------------------------------
// Require Config
//--------------------------------------------------------------------------

require('app/config.php');

//--------------------------------------------------------------------------
// Autoload all Classes
//--------------------------------------------------------------------------

require('app/autoload.php');

//--------------------------------------------------------------------------
// 404 Page
//--------------------------------------------------------------------------

if (!Helpers\Nanite::$routeProccessed) {
    require(TEMPLATE_DIR . '404.php');
}
