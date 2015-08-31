<?php
const HTTP_RESPONSE_NOT_FOUND = 404;
require_once('vendor/autoload.php');

require('paths.php');
require_once(CONFIG . 'config.php');

//choose SQL table and set up functions to user authentication and
//navbar configuration for login/logout links
require(INCLUDES . 'authentication_nav.inc.php');

//override various default settings with GET parameters, if they exist
include(INCLUDES . 'url_variables.inc.php');

//set up brewers, themes, etc.
include(INCLUDES . 'db_connect_universal.inc.php');

//set up recipes, brewlogs, etc.
include(INCLUDES . 'db_connect_log.inc.php');

//include various conversions functions, date functions and truncate functions
//plus additional libs for 
//    titles.inc.php - set up the navigation?
//    messages.inc.php - tooltips and a few messages
//    scrubber.inc.php - a few arrays for character replacement
include(INCLUDES . 'functions.inc.php');

//figure out SRM and a hex value for displaying beer color
//include (INCLUDES.'color.inc.php');

// Load color library functions
require_once(ADMIN_LIBRARY . 'color.lib.php');

//determine if club edition or personal edition is in use
include(INCLUDES . 'version.inc.php');

// Load constants
require_once(ADMIN_INCLUDES . 'constants.inc.php');

$imageSrc = "images/";

$loader = new Twig_Loader_Filesystem(__DIR__ . '/views/');
$twig   = new Twig_Environment($loader, array(
    'debug'      => true,
    'autoescape' => false,
));
$twig->addExtension(new Twig_Extension_Debug());

$twig->addGlobal('breadcrumb', $breadcrumb);
$twig->addGlobal('checkmobile', checkmobile());
$twig->addGlobal('filter', isset($filter) ? $filter : null);
$twig->addGlobal('icon', $icon);
$twig->addGlobal('image_src', "images/");
$twig->addGlobal('log', isset($row_log) ? $row_log : null);
$twig->addGlobal('logged_in', isset($_SESSION["loginUsername"]));
$twig->addGlobal('name', isset($row_name) ? $row_name : null);
$twig->addGlobal('news', include SECTIONS . 'news.inc.php');
$twig->addGlobal('page', $page);
$twig->addGlobal('page_title', $page_title);
$twig->addGlobal('page_title_extension', $page_title_extension);
$twig->addGlobal('pref', $row_pref);
$twig->addGlobal('section', $section);
$twig->addGlobal('totalRows_awardGen', $totalRows_awardGen);
$twig->addGlobal('user', isset($row_user) ? $row_user : array());
$twig->addGlobal('user2', isset($row_user2) ? $row_user2 : null);
$twig->addGlobal('version', $version);

$actionMap = array(
    'brewBlogCurrent' => 'brewBlogAction.inc.php',
    'brewBlogDetail'  => 'brewBlogAction.inc.php',
    'brewBlogList'    => 'brewblogList.inc.php',
    'recipeList'      => 'recipeList.inc.php',
    'awardsList'      => 'awardsList.inc.php',
    'login'           => 'login.inc.php',
    'tools'           => 'tools.inc.php',
    'reference'       => 'reference.inc.php',
    'calendar'        => 'calendar.inc.php',
    'memberList'      => 'memberList.inc.php',
    'profile'         => 'profile.inc.php',
    'news'            => 'news.inc.php',
    'recipeDetail'    => 'recipeDetail.inc.php',
    'about'           => 'about.inc.php',
);

if (isset($actionMap[$page])) {
    echo include(SECTIONS . $actionMap[$page]);
} else {
    http_response_code(HTTP_RESPONSE_NOT_FOUND);
}
