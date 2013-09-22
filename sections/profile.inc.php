<?php
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


return $twig->render('profile.html.twig', array(
    'brewing_count' => $totalRows_count1,
    'recipe_count'  => $totalRows_count2,
    'member'        => $row_members,
));

// Sidebar
$bottomSidebar .= include(SECTIONS . 'userPic.inc.php');