<?php

//if (($page == "brewBlogCurrent") || ($page == "brewBlogDetail") || ($page == "recipeDetail")) {
//    $tplVars['title'] .= " [" . $row_log['brewStyle'] . "]";
//}

// Include sections according to set preferences
$content = '';

if ($row_pref['allowSpecifics'] == "Y") $content .= include(SECTIONS . 'recipe_specifics.inc.php');
if ($row_pref['allowGeneral'] == "Y") $content .= include(SECTIONS . 'recipe_general.inc.php');
if ($row_pref['allowRecipe'] == "Y") $content .= include(SECTIONS . 'recipe.inc.php');
if ($row_pref['allowProcedure'] == "Y") $content .= include(SECTIONS . 'recipe_procedure.inc.php');
if ($row_pref['allowFermentation'] == "Y") $content .= include(SECTIONS . 'recipe_fermentation.inc.php');
if ($row_pref['allowComments'] == "Y") $content .= include(SECTIONS . 'recipe_notes.inc.php');

//Sidebar
// Include sidebar sections according to preferences
$bottomSidebar = '';
if ($row_pref['allowPrintRecipe'] == "Y") $bottomSidebar .= include(SECTIONS . 'printRecipe.inc.php');
if ($row_pref['allowPrintXML'] == "Y") $bottomSidebar .= include(SECTIONS . 'printXML.inc.php');
$bottomSidebar .= include(SECTIONS . 'quick_edit.inc.php');
if ($row_pref['allowAwards'] == "Y") $bottomSidebar .= include(SECTIONS . 'awards.inc.php');
if ($row_pref['allowRelated'] == "Y") $bottomSidebar .= include(SECTIONS . 'related.inc.php');
if ($row_pref['allowList'] == "Y") $bottomSidebar .= include(SECTIONS . 'list.inc.php');

return $twig->render('recipeDetail.html.twig', array(
    'content' => $content,
    'sidebar' => $bottomSidebar,
));