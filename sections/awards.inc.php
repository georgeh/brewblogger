<?php
$pageVars = array(
    'awards' => array()
);

do {
    if (empty($row_awards)) continue;
    $pageVars['awards'][] = $row_awards;
} while ($row_awards = mysql_fetch_assoc($awards));

return $twig->render('awards.html.twig', $pageVars);