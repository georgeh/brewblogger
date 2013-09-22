<?php


mysql_select_db($database_brewing, $brewing);
$query_styles = sprintf("SELECT * FROM styles WHERE brewStyle='%s'", $row_log['brewStyle']);
$styles = mysql_query($query_styles, $brewing) or die(mysql_error());
$row_styles       = mysql_fetch_assoc($styles);
$totalRows_styles = mysql_num_rows($styles);

ob_start();
include('reference/styles.inc.php');
$styleInclude = ob_get_clean();
$row_user2    = null;

if ($row_pref['mode'] == "2") {
    mysql_select_db($database_brewing, $brewing);
    $query_user2 = sprintf("SELECT * FROM users WHERE user_name = '%s'", $row_log['brewBrewerID']);
    $user2 = mysql_query($query_user2, $brewing) or die(mysql_error());
    $row_user2       = mysql_fetch_assoc($user2);
    $totalRows_user2 = mysql_num_rows($user2);
}

$amount = null;
if (($row_log['brewYield'] != "") && ($action == "scale")) {
    $amount = $amt;
}

$row_log['brewBitterness_formatted'] = round(ltrim($row_log['brewBitterness'], "0"), 1);

if (($row_log['brewOG'] != "") && ($row_log['brewFG'] != "")) {
    $row_log['bu_gu_ratio'] = calc_bugu($row_log['brewBitterness'], $row_log['brewOG']);
    $row_log['calories']    = calc_calories($row_log['brewOG'], $row_log['brewFG']);
    $row_log['abv']         = calc_abv($row_log['brewOG'], $row_log['brewFG']);
    $row_log['abw']         = calc_abw($row_log['brewOG'], $row_log['brewFG']);
    $row_log['extract']     = calc_extract($row_log['brewOG'], $row_log['brewFG']);
    $row_log['app_atten']   = calc_app_atten($row_log['brewOG'], $row_log['brewFG']);
    $row_log['real_atten']  = calc_real_atten($row_log['brewOG'], $row_log['brewFG']);
}

if ($row_log['brewLovibond'] != "") {
    $brewLov = $row_log['brewLovibond'];
    if ($row_pref['measColor'] == "EBC") {
        $brewLov = ebc_to_srm($brewLov);
    }
    $row_log['srm']                  = $brewLov;
    $row_log['brewLovibond_rounded'] = round($row_log['brewLovibond'], 1);
    $row_log['brewLovibond_bgcolor'] = get_display_color($brewLov);
}

if ($row_log['brewOG'] != "") {
    $row_log['brewOG_plato'] = calc_plato($row_log['brewOG']);
}

if ($row_log['brewFG'] != "") {
    $row_log['brewFG_plato'] = calc_plato($row_log['brewFG']);
}

$pageVars = array(
    'style_count'   => $totalRows_styles,
    'style_include' => $styleInclude,
    'user2'         => $row_user2,
    'action'        => $action,
    'pref'          => $row_pref,
    'log'           => $row_log,
    'amt'           => $amount,
);

return $twig->render('recipe/specifics.html.twig', $pageVars);
