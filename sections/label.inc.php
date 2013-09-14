<?php
if (!function_exists('getFileSizeW')) {
    function getFileSizeW($file)
    {
        $size = getimagesize($file);
        $width = $size[0];
        return $width;
    }
}

if (!function_exists('getFileSizeH')) {
    function getFileSizeH($fileH)
    {
        $size = getimagesize($fileH);
        $height = $size[1];
        return $height;
    }
}

$pageVars = array(
    'label_image_exists' => false,
    'log' => $row_log,
);
$filename = IMAGES_DIR."/label_images/".$row_log['brewLabelImage'];

if (($row_log['brewLabelImage'] != "") && (file_exists($filename))) {
    $pageVars['label_image_exists'] = true;
    $pageVars['img_w'] = getFileSizeW($filename);
    $pageVars['img_h'] = getFileSizeH($filename);
}

return $twig->render('label.html.twig', $pageVars);