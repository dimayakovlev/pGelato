<?php

/**
 * pGelato Library
 *
 * This source file is part of the pGelato Library. More information,
 * documentation and tutorials can be found at http://gelato.monstra.org
 *
 * @package     pGelato
 *
 * @author      Romanenko Sergey / Awilum <awilum@msn.com>
 * @copyright   2012-2014 Romanenko Sergey / Awilum <awilum@msn.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * The version of pGelato
 */
define('PGELATO_VERSION', '1.0.3');

/** 
 * Define __DIR__ constant for PHP 5.2.x
 */
if ( ! defined('__DIR__')) {
    define('__DIR__', dirname(__FILE__));
}

/**
 * Display pGelato Errors or not ?
 */
if ( ! defined('PGELATO_DEVELOPMENT')) {
    define('PGELATO_DEVELOPMENT', true);
}

/**
 * Use pGelato Class Loader or not ?
 */
if ( ! defined('PGELATO_CLASS_LOADER')) {
    define('PGELATO_CLASS_LOADER', true);
}

/**
 * Load pGelato Logger
 */
require_once __DIR__ . '/Log/Log.php';

/**
 * Use pGelato Logger default path or not ?
 */
if ( ! defined('PGELATO_LOGS_PATH')) {
    define('PGELATO_LOGS_PATH', __DIR__. '/_logs');
}

/**
 * Configure pGelato Logger
 */
Log::configure('path', PGELATO_LOGS_PATH);

/**
 * Load pGelato Error Handler
 */
require_once __DIR__ . '/ErrorHandler/ErrorHandler.php';

/**
 * Set Error Handler
 */
set_error_handler('ErrorHandler::error');

/**
 * Set Fatal Error Handler
 */
register_shutdown_function('ErrorHandler::fatal');

/**
 * Set Exception Handler
 */
set_exception_handler('ErrorHandler::exception');

/**
 * pGelato Class Loader
 */
require_once __DIR__ . '/ClassLoader/ClassLoader.php';

/**
 * Map all pGelato Classes
 */
ClassLoader::mapClasses(array(
    'Agent'        => __DIR__.'/Agent/Agent.php',
    'Arr'          => __DIR__.'/Arr/Arr.php',
    'Cache'        => __DIR__.'/Cache/Cache.php',
    'Cookie'       => __DIR__.'/Cookie/Cookie.php',
    'Curl'         => __DIR__.'/Curl/Curl.php',
    'Date'         => __DIR__.'/Date/Date.php',
    'Debug'        => __DIR__.'/Debug/Debug.php',
    'File'         => __DIR__.'/FileSystem/File.php',
    'Dir'          => __DIR__.'/FileSystem/Dir.php',
    'Form'         => __DIR__.'/Form/Form.php',
    'Html'         => __DIR__.'/Html/Html.php',
    'Image'        => __DIR__.'/Image/Image.php',
    'Inflector'    => __DIR__.'/Inflector/Inflector.php',
    'MinifyCSS'    => __DIR__.'/Minify/MinifyCSS.php',
    'MinifyHTML'   => __DIR__.'/Minify/MinifyHTML.php',
    'MinifyJS'     => __DIR__.'/Minify/MinifyJS.php',
    'Notification' => __DIR__.'/Notification/Notification.php',
    'Number'       => __DIR__.'/Number/Number.php',
    'Registry'     => __DIR__.'/Registry/Registry.php',
    'Request'      => __DIR__.'/Http/Request.php',
    'Response'     => __DIR__.'/Http/Response.php',
    'Token'        => __DIR__.'/Security/Token.php',
    'Text'         => __DIR__.'/Text/Text.php',
    'Session'      => __DIR__.'/Session/Session.php',
    'Url'          => __DIR__.'/Url/Url.php',
    'Valid'        => __DIR__.'/Validation/Valid.php',
    'Zip'          => __DIR__.'/Zip/Zip.php',
));

/**
 * Register pGelato Class Loader
 */
if (PGELATO_CLASS_LOADER) {
    ClassLoader::register();
}
