<?php
$pageVars = array(
    'upcoming'  => array(),
    'pref'      => $row_pref,
    'user2'     => $row_user2,
);

if ($row_pref['mode'] == "2") {
    mysql_select_db($database_brewing, $brewing);
    $query_user2 = sprintf("SELECT * FROM users WHERE user_name = '%s'", $row_log['brewBrewerID']);
    $user2 = mysql_query($query_user2, $brewing) or die(mysql_error());
    $row_user2       = mysql_fetch_assoc($user2);
    $totalRows_user2 = mysql_num_rows($user2);
}

do {
    if (empty($row_upcoming)) continue;
    // Get brewer ids
    mysql_select_db($database_brewing, $brewing);
    $query_brewerID = sprintf("SELECT * FROM recipes WHERE id = '%s'", $row_upcoming['upcomingRecipeID']);
    $brewerID = mysql_query($query_brewerID, $brewing) or die(mysql_error());
    $row_brewerID       = mysql_fetch_assoc($brewerID);
    $totalRows_brewerID = mysql_num_rows($brewerID);

    $brew = $row_upcoming;
    if ($row_brewerID) {
        $brew = array_merge($brew, $row_brewerID);
    }

    $brew['upcoming_truncated'] = truncate_string($row_upcoming['upcoming'], 25, '...');
    $pageVars['upcoming'][]     = $brew;

} while ($row_upcoming = mysql_fetch_assoc($upcoming));

return $twig->render('upcoming.html.twig', $pageVars);