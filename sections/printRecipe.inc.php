<?php
if ($page == "recipeDetail") {
    $source  = "recipe";
    $dbTable = "recipes";
} else {
    $source  = "default";
    $dbTable = "default";
}

if ($amt == "default") $amt = 0;


return $twig->render('printRecipe.html.twig', array(
    'browser'   => (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE")) ? 'IE' : 'notIE',
    'id'        => $id,
    'source'    => $source,
    'db_table'  => $dbTable,
    'page'      => 'recipePrint',
    'style'     => $row_log['brewStyle'],
    'scale'     => ($action == "scale") ? 'Y' : 'N',
    'amt'       => $amt,
    'name'      => $row_log['brewName'],
    'image_src' => $imageSrc,
    'theme'     => $row_colorChoose['themeName'],
));

