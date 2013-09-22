<?php
$pageVars = array(
    'id' => $id,
    'statuses' => array(),
);

do {
    $row_status['brewName_truncated'] = truncate_string($row_status['brewName'],25,'...');
    $pageVars['statuses'][] = $row_status;
} while ($row_status = mysql_fetch_assoc($status));

return $twig->render('status.html.twig', $pageVars);
