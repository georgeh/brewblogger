<?php

if (!function_exists('getFileSizeW')) {
    function getFileSizeW($file)
    {
        $size  = getimagesize($file);
        $width = $size[0];
        return $width;
    }
}

if (!function_exists('getFileSizeH')) {
    function getFileSizeH($fileH)
    {
        $size   = getimagesize($fileH);
        $height = $size[1];
        return $height;
    }
}

$pageVars = array(
    'list'       => array(),
    'total'      => $total,
    'display'    => $display,
    'pg'         => $pg,
    'logged_in'  => isset($_SESSION["loginUsername"]),
    'user'       => isset($user) ? $user : array(),
    'pagination' => paginate($display, $pg, $total),
);

do {
    if (empty($row_list)) continue;

    $item             = $row_list;
    $truncationLength = 40;
    if ($page != "recipeDetail" && $page != 'about') {
        $truncationLength = 100;
    }
    $item['brewName_truncated'] = truncate_string($row_list['brewName'], $truncationLength, '...');
    if (isset($row_list['brewerLinkName'])) {
        $item['brewerLinkName_truncated'] = truncate_string($row_list['brewerLinkName'], $truncationLength, '...');
    }

    $pageVars['list'][] = $item;
} while ($row_list = mysql_fetch_assoc($list));

return $twig->render('list.html.twig', $pageVars);
