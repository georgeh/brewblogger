<?php
$pageVars = array(
    'color1'  => $color1,
    'color2'  => $color2,
    'members' => array(),
);

do {
    mysql_select_db($database_brewing, $brewing);
    $query_count1 = sprintf("SELECT * FROM brewing WHERE brewBrewerID = '%s'", $row_members['user_name']);
    $count1 = mysql_query($query_count1, $brewing) or die(mysql_error());
    $row_count1       = mysql_fetch_assoc($count1);
    $totalRows_count1 = mysql_num_rows($count1);

    mysql_select_db($database_brewing, $brewing);
    $query_count2 = sprintf("SELECT * FROM recipes WHERE brewBrewerID = '%s'", $row_members['user_name']);
    $count2 = mysql_query($query_count2, $brewing) or die(mysql_error());
    $row_count2       = mysql_fetch_assoc($count2);
    $totalRows_count2 = mysql_num_rows($count2);

    mysql_select_db($database_brewing, $brewing);
    $query_count3 = sprintf("SELECT * FROM awards WHERE brewBrewerID = '%s'", $row_members['user_name']);
    $count3 = mysql_query($query_count3, $brewing) or die(mysql_error());
    $row_count3       = mysql_fetch_assoc($count3);
    $totalRows_count3 = mysql_num_rows($count3);

    $pageVars['members'][] = $row_members + array(
            'brewingTotal' => $totalRows_count1,
            'recipeTotal'  => $totalRows_count2,
            'awardTotal'   => $totalRows_count3,
        );
} while ($row_members = mysql_fetch_assoc($members));

return $twig->render('memberList.html.twig', $pageVars);
