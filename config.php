<?php
/**
 * Simple Config File
 *
 * @author  Pixelbart
 * @version 1.0
 */

//--------------------------------------------------------------------------
// Define your Vars
//--------------------------------------------------------------------------

define('BASE_URL', 'YOUR-WEBSITE.COM'); // URL from your site
define('BASE_LANG', 'en'); // html lang
define('BASE_CHARSET', 'utf-8'); // meta charset
  
define('TEMPLATE_NAME', 'default'); // Template Folder  
define('TEMPLATE_404', '404'); // Template File from Template Dir for 404

//--------------------------------------------------------------------------
// Set your Database Connection
//--------------------------------------------------------------------------

define('DB_HOST', ''); // DB Host
define('DB_NAME', ''); // DB Name
define('DB_USER', ''); // DB User Name
define('DB_PASS', ''); // DB User Password

//--------------------------------------------------------------------------
// Define Base Dir
//--------------------------------------------------------------------------

// Use it to include files (server path to this folder!)
define('BASE_DIR', dirname(__FILE__));

//--------------------------------------------------------------------------
// Define Template Dir
//--------------------------------------------------------------------------

// Use it to include files from template dir (server path to the template folder)
define('TEMPLATE_DIR', dirname(__FILE__) . '/app/Templates/' . TEMPLATE_NAME . '/');

//--------------------------------------------------------------------------
// Define Template Folder
//--------------------------------------------------------------------------

// Use it to link your css or javascript files in your templates
define('TEMPLATE_URL', BASE_URL . 'app/Templates/' . TEMPLATE_NAME . '/');
