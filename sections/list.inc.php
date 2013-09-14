<?php

function getFileSizeW($file)
{
    $size  = getimagesize($file);
    $width = $size[0];
    return $width;
}

function getFileSizeH($fileH)
{
    $size   = getimagesize($fileH);
    $height = $size[1];
    return $height;
}

$pageVars = array(
    'image_src' => $imageSrc,
    'page'      => $page,
    'pref'      => $row_pref,
    'list'      => array(),
    'total'     => $total,
    'display'   => $display,
    'pg'        => $pg,
    'log'       => $row_log,
    'logged_in' => isset($_SESSION["loginUsername"]),
    'user'      => $user,
    'user2'     => $row_user2,
    'name'      => $row_name,

);

ob_start();
paginate($display, $pg, $total);
$pageVars['pagination'] = ob_get_clean();

do {
    if (empty($row_list)) continue;

    $item             = $row_list;
    $truncationLength = 40;
    if ($page != "recipeDetail" && $page != 'about') {
        $truncationLength = 100;
    }
    $item['brewName_truncated'] = truncate_string($row_list['brewName'], $truncationLength, '...');
    $item['brewerLinkName_truncated'] = truncate_string($row_list['brewerLinkName'], $truncationLength, '...');
    $pageVars['list'][]         = $item;
} while($row_list = mysql_fetch_assoc($list));

return $twig->render('list.html.twig', $pageVars);
