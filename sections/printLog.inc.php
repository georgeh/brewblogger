<?php
return $twig->render('printLog.html.twig', array(
    'browser'   => (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE")) ? 'IE' : 'notIE',
    'id'        => $row_log['id'],
    'source'    => 'log',
    'db_table'  => "brewing",
    'page'      => "logPrint",
    'style'     => $row_log['brewStyle'],
    'scale'     => ($action == "scale") ? 'Y' : 'N',
    'amt'       => $amt,
    'name'      => $row_log['brewName'],
    'image_src' => $imageSrc,
    'theme'     => $row_colorChoose['themeName'],
));
