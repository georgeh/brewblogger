<?php
require_once('vendor/autoload.php');

require('paths.php');
require_once(CONFIG . 'config.php');

//choose SQL table and set up functions to user authentication and
//navbar configuration for login/logout links
require(INCLUDES . 'authentication_nav.inc.php');
session_start();

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

$loader = new Twig_Loader_Filesystem(__DIR__ . '/twig/');
$twig   = new Twig_Environment($loader, array(
    'debug'      => true,
    'autoescape' => false,
));
$twig->addExtension(new Twig_Extension_Debug());

$tplVars         = array();
$tplVars['name'] = isset($row_name) ? $row_name : null;
$tplVars['pref'] = isset($row_pref) ? $row_pref : null;
$tplVars['log']  = isset($row_log) ? $row_log : null;


$tplVars['brewerLogName'] = $row_name['brewerLogName'];
$tplVars['brewerName']    = trim($row_name['brewerFirstName'] . ' ' . $row_name['brewerLastName']);
$tplVars['version']       = $version;


if ($row_pref['mode'] == "1") {
    $tplVars['title'] = $tplVars['brewerName'] . "'s " . "BrewBlog &gt; " . $page_title . $page_title_extension;
} else if ($row_pref['mode'] == "2") {
    $tplVars['title'] = $row_name['brewerFirstName'] . "&nbsp;" . $row_name['brewerLogName'] . " &gt; " . $page_title . $page_title_extension;
}

if (($page == "brewBlogCurrent") || ($page == "brewBlogDetail") || ($page == "recipeDetail")) {
    $tplVars['title'] .= " [" . $row_log['brewStyle'] . "]";
}

$tplVars['checkmobile']  = checkmobile();
$tplVars['theme']        = $row_pref['theme'];
$tplVars['page']         = $page;
$tplVars['section']      = $section;
$tplVars['printBrowser'] = $printBrowser;

$tplVars['navigation'] = include INCLUDES . 'navigation.inc.php';

$tplVars['breadcrumb']        = $breadcrumb;
$tplVars['totalRows_newsGen'] = $totalRows_newsGen;

$tplVars['news'] = include SECTIONS . 'news.inc.php';

$tplVars['imageSrc'] = $imageSrc;
$tplVars['icon']     = $icon;
$tplVars['page_title'] = $page_title;

$content = '';
if (($page == "brewBlogCurrent") || ($page == "brewBlogDetail")) {
    if ($row_pref['allowSpecifics'] == "Y") $content .= include SECTIONS . 'recipe_specifics.inc.php';
    if ($row_pref['allowGeneral'] == "Y") $content .= include SECTIONS . 'recipe_general.inc.php';
    if ($row_pref['allowComments'] == "Y") $content .= include SECTIONS . 'recipe_comments.inc.php';
    if ($row_pref['allowRecipe'] == "Y") $content .= include SECTIONS . 'recipe.inc.php';
    $content .= include SECTIONS . 'recipe_equipment.inc.php';
    if ($row_pref['allowMash'] == "Y") $content .= include SECTIONS . 'recipe_mash.inc.php';
    if ($row_pref['allowWater'] == "Y") $content .= include SECTIONS . 'recipe_water.inc.php';
    if ($row_pref['allowProcedure'] == "Y") $content .= include SECTIONS . 'recipe_procedure.inc.php';
    if ($row_pref['allowSpecialProcedure'] == "Y") $content .= include SECTIONS . 'recipe_special_procedure.inc.php';
    if ($row_pref['allowFermentation'] == "Y") $content .= include SECTIONS . 'recipe_fermentation.inc.php';
    if (!checkmobile() && $row_pref['allowReviews'] == "Y") $content .= include SECTIONS . 'recipe_reviews.inc.php';
} elseif ($page == "brewBlogList") {
    $content .= include(SECTIONS . 'brewblogList.inc.php');
    $tplVars['page_title'] = 'BrewBlogs';
} elseif ($page == "recipeList") {
    $content .= include(SECTIONS . 'recipeList.inc.php');
    $tplVars['page_title'] = 'Recipes';
} elseif ($page == "awardsList") {
    $content .= include(SECTIONS . 'awardsList.inc.php');
    $tplVars['page_title'] = 'Awards-Competitions';
} elseif ($page == "login") {
    $content .= include(SECTIONS . 'login.inc.php');
} elseif ($page == "tools") {
    $tplVars['page_title'] = 'Calculators';
    $content .= include(SECTIONS . 'tools.inc.php');
} elseif ($page == "about") {
    $content .= include(SECTIONS . 'about.inc.php');
    $tplVars['page_title'] = 'About';
} elseif ($page == "reference") {
    $content .= include(SECTIONS . 'reference.inc.php');
    $tplVars['page_title'] = 'Reference';
} elseif (($row_pref['allowCalendar'] == "Y") && ($page == "calendar")) {
    $content .= include(SECTIONS . 'calendar.inc.php');
    $tplVars['page_title'] = 'Calendar';
} elseif (($row_pref['allowCalendar'] == "N") && ($page == "calendar")) {
    $content .= '<p class="error">This feature has been disabled by the site administrator.</p>';
} elseif (($row_pref['mode'] == "2") && ($page == "members")) {
    $content .= include(SECTIONS . 'memberList.inc.php');
    $tplVars['page_title'] = 'Members';
} elseif (($row_pref['mode'] == "2") && ($page == "profile")) {
    $content .= include(SECTIONS . 'profile.inc.php');
} elseif (($row_pref['mode'] == "2") && ($page == "news")) {
    $content .= include(SECTIONS . 'news.inc.php');
} elseif ($page == "recipeDetail") {
    // Include sections according to set preferences
    if ($row_pref['allowSpecifics'] == "Y") $content .= include(SECTIONS . 'recipe_specifics.inc.php');
    if ($row_pref['allowGeneral'] == "Y") $content .= include(SECTIONS . 'recipe_general.inc.php');
    if ($row_pref['allowRecipe'] == "Y") $content .= include(SECTIONS . 'recipe.inc.php');
    if ($row_pref['allowProcedure'] == "Y") $content .= include(SECTIONS . 'recipe_procedure.inc.php');
    if ($row_pref['allowFermentation'] == "Y") $content .= include(SECTIONS . 'recipe_fermentation.inc.php');
    if ($row_pref['allowComments'] == "Y") $content .= include(SECTIONS . 'recipe_notes.inc.php');
}
$tplVars['body'] = $content;

$topSidebar    = '';
$bottomSidebar = '';
if ($page == "about") {
    $topSidebar .= include(SECTIONS . 'list.inc.php');
}
if (($page == "brewBlogCurrent") || ($page == "brewBlogDetail")) {
    if (!checkmobile()) {
        // Include printing, BeerXML buttons according to preferences
        if ($row_pref['allowPrintLog'] == "Y") $topSidebar .= include(SECTIONS . 'printLog.inc.php');
        if ($row_pref['allowPrintRecipe'] == "Y") $topSidebar .= include(SECTIONS . 'printRecipe.inc.php');
        if ($row_pref['allowPrintXML'] == "Y") $topSidebar .= include(SECTIONS . 'printXML.inc.php');
    }

    $bottomSidebar .= include(SECTIONS . 'quick_edit.inc.php');

    if (!checkmobile() && $row_pref['allowLabel'] == "Y") $bottomSidebar .= include(SECTIONS . 'label.inc.php');
    if ($row_pref['allowAwards'] == "Y") $bottomSidebar .= include(SECTIONS . 'awards.inc.php');
    if ($row_pref['allowRelated'] == "Y") $bottomSidebar .= include(SECTIONS . 'related.inc.php');

    $bottomSidebar .= include(SECTIONS . 'list.inc.php');

    if ($row_pref['allowStatus'] == "Y") $bottomSidebar .= include(SECTIONS . 'status.inc.php');
    if ($row_pref['allowUpcoming'] == "Y") $bottomSidebar .= include(SECTIONS . 'upcoming.inc.php');
}
if ($page == "recipeDetail") {
    // Include sidebar sections according to preferences
    if ($row_pref['allowPrintRecipe'] == "Y") $bottomSidebar .= include(SECTIONS . 'printRecipe.inc.php');
    if ($row_pref['allowPrintXML'] == "Y") $bottomSidebar .= include(SECTIONS . 'printXML.inc.php');
    $bottomSidebar .= include(SECTIONS . 'quick_edit.inc.php');
    if ($row_pref['allowAwards'] == "Y") $bottomSidebar .= include(SECTIONS . 'awards.inc.php');
    if ($row_pref['allowRelated'] == "Y") $bottomSidebar .= include(SECTIONS . 'related.inc.php');
    if ($row_pref['allowList'] == "Y") $bottomSidebar .= include(SECTIONS . 'list.inc.php');
}

if ($page == "profile") {
    $bottomSidebar .= include(SECTIONS . 'userPic.inc.php');
}

$tplVars['topSidebar']    = $topSidebar;
$tplVars['bottomSidebar'] = $bottomSidebar;

$tplVars['footer'] = include(INCLUDES . 'footer.inc.php');

$tplVars['filter'] = isset($filter) ? $filter : null;
$tplVars['user2']  = isset($row_user2) ? $row_user2 : null;

echo $twig->render('index.html.twig', $tplVars);
