<?php
if (($page == "brewBlogCurrent") || ($page == "brewBlogDetail") || ($page == "brewBlogList") || (($action == "list") && ($dbTable == "brewing"))) $source = "brewLog";
if (($page == "recipeDetail") || ($page == "recipeList") || (($action == "list") && ($dbTable == "recipes"))) $source = "recipe";

return $twig->render('printXML.html.twig', array(
    'browser'   => (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE")) ? 'IE' : 'notIE',
    'id'        => $row_log['id'],
    'source'    => $source,
    'style'     => $row_log['brewStyle'],
    'image_src' => $imageSrc,
    'theme'     => $row_colorChoose['themeName'],
));

