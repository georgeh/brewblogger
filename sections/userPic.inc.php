<?php
$pageVars = array(
    'member' => $row_members,
);
if ($row_members['userPicURL'] != "") {
    $img  = $row_members['userPicURL'];
    $file = rtrim(IMAGES_DIR . "/label_images/" . $img, " ");

    $max_width  = 225;
    $max_height = 450;

    list($width, $height) = getimagesize($file);
    if (($width >= $max_width) || ($height >= $max_height)) {
        $ratioh = $max_height / $height;
        $ratiow = $max_width / $width;
        $ratio  = min($ratioh, $ratiow);
        // New dimensions
        $width  = intval($ratio * $width);
        $height = intval($ratio * $height);
    }
    $pageVars['width'] = $width;
    $pageVars['height'] = $height;
}

return $twig->render('userPic.html.twig', $pageVars);