<?php

$pageVars = array(
    'user_can_edit'   => false,
    'page'            => $page,
    'filter'          => $filter,
    'log'             => $row_log,
    'image_src'       => $imageSrc,
    'pref'            => $row_pref,
    'login_username'  => $loginUsername,
    'user'            => $row_user,
    'tooltip_gravity' => $toolTip_gravity,

);

if (((isset($_SESSION["loginUsername"])) && ($row_log['brewBrewerID'] == $loginUsername)) || ((isset($_SESSION["loginUsername"])) && ($row_user['userLevel'] == "1"))) {
    $pageVars['user_can_edit'] = true;
}

if (($page == "brewBlogCurrent") || ($page == "brewBlogDetail")) {
    $pageVars['db_table']       = 'brewing';
    $pageVars['page_type_name'] = $row_pref['menuBrewBlogs'];
} elseif ($page == "recipeDetail") {
    $pageVars['db_table']       = "recipes";
    $pageVars['page_type_name'] = $row_pref['menuRecipes'];
}

return $twig->render('quick_edit.html.twig', $pageVars);