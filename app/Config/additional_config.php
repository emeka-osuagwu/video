<?php
ini_set('memory_limit','2048M');
date_default_timezone_set('Africa/Lagos');
define('PROJECT_NAME', 'CakePHP Project');
define('FORMAT_TIMESTAMP', 'Y-m-d H:i:s');
define('FV_REQUIRED', 'required');
define('FV_EMAIL', 'email');
define('FV_EMPTY_OR_EMAIL', 'empty_or_email');
define('FV_DATE', 'date');
define('FV_NUMERIC', 'numeric');
define('FV_ALPHANUMERIC', 'alphanum');
define('FV_DOUBLE', 'double');
define('FIRST', 'first');
define('ALL', 'all');
define('ALIST', 'list');
define('COUNT', 'count');
define('MUSIC', 'MUSIC');
define('VIDEO', 'VIDEO');
define('IMAGE', 'IMAGE');
define('FV_ALPHA', 'alpha');
define('FV_RANGE', 'range');
define('FV_MIN_LENGTH', 'minlength');
define('FV_MAX_LENGTH', 'maxlength');
define('FV_URL', 'website');

define('ABS_FILE_URL', APP . 'webroot/uploads/');
define('ABS_IMAGE_URL', APP . 'webroot/uploads/');

define('WWW_IMAGE_URL', '/uploads');

//CakePlugin::load('DebugKit');

define('CFG_IS_DEV_SERVER', (isset($_SERVER['HTTP_HOST']) && stripos($_SERVER['HTTP_HOST'],'localhost')!==false));

define('CFG_LIST_LIMIT',10);

define('CFG_GS_BUCKET','gs://bucket_name');

function dd($hello){
    print_r($hello);
    exit;
}