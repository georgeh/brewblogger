<?php

//if (($page == "brewBlogCurrent") || ($page == "brewBlogDetail") || ($page == "recipeDetail")) {
//    $tplVars['title'] .= " [" . $row_log['brewStyle'] . "]";
//}

// content
$content = '';
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

// Sidebar
$topSidebar = '';
if (!checkmobile()) {
    // Include printing, BeerXML buttons according to preferences
    if ($row_pref['allowPrintLog'] == "Y") $topSidebar .= include(SECTIONS . 'printLog.inc.php');
    if ($row_pref['allowPrintRecipe'] == "Y") $topSidebar .= include(SECTIONS . 'printRecipe.inc.php');
    if ($row_pref['allowPrintXML'] == "Y") $topSidebar .= include(SECTIONS . 'printXML.inc.php');
}

$bottomSidebar = include(SECTIONS . 'quick_edit.inc.php');

if (!checkmobile() && $row_pref['allowLabel'] == "Y") $bottomSidebar .= include(SECTIONS . 'label.inc.php');
if ($row_pref['allowAwards'] == "Y") $bottomSidebar .= include(SECTIONS . 'awards.inc.php');
if ($row_pref['allowRelated'] == "Y") $bottomSidebar .= include(SECTIONS . 'related.inc.php');

$bottomSidebar .= include(SECTIONS . 'list.inc.php');

if ($row_pref['allowStatus'] == "Y") $bottomSidebar .= include(SECTIONS . 'status.inc.php');
if ($row_pref['allowUpcoming'] == "Y") $bottomSidebar .= include(SECTIONS . 'upcoming.inc.php');

return $twig->render('recipeDetail.html.twig', array(
    'content' => $content,
    'sidebar' => $topSidebar . $bottomSidebar,
));