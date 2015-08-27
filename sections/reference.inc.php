<?php
$source = "reference";
if (isset($_GET['source'])) {
  $source = (get_magic_quotes_gpc()) ? $_GET['source'] : addslashes($_GET['source']);
}

if ($source != "reference") { 
require ('../paths.php');
require_once (CONFIG.'config.php'); 
require_once (ADMIN_LIBRARY.'color.lib.php');
include (INCLUDES.'url_variables.inc.php');
include (INCLUDES.'db_connect_universal.inc.php');  
include (INCLUDES.'functions.inc.php'); 
$imageSrc = "../images/"; 
//echo (REFERENCE.'color.inc.php');
}

// ------------------------------- Styles -------------------------------
if ($section == "styles") { 
mysql_select_db($database_brewing, $brewing);
$query_styles = "SELECT * FROM styles ORDER BY brewStyleGroup,brewStyleNum ASC";
$styles = mysql_query($query_styles, $brewing) or die(mysql_error());
$row_styles = mysql_fetch_assoc($styles);
$totalRows_styles = mysql_num_rows($styles);
}

// ------------------------------- Hops -------------------------------
if ($section == "hops") { 
mysql_select_db($database_brewing, $brewing);
$query_styles = "SELECT * FROM hops ORDER BY hopsName ASC";
$styles = mysql_query($query_styles, $brewing) or die(mysql_error());
$row_styles = mysql_fetch_assoc($styles);
$totalRows_styles = mysql_num_rows($styles);
}

// ------------------------------- Grains -------------------------------
if ($section == "grains") {
mysql_select_db($database_brewing, $brewing);
$query_grains = "SELECT * FROM malt ORDER BY maltName ASC";
$grains = mysql_query($query_grains, $brewing) or die(mysql_error());
$row_grains = mysql_fetch_assoc($grains);
$totalRows_grains = mysql_num_rows($grains);
}

// ------------------------------- Yeast -------------------------------
if ($section == "yeast") {
mysql_select_db($database_brewing, $brewing);
$query_yeast = "SELECT * FROM yeast_profiles ORDER BY yeastLab,yeastName";
$yeast = mysql_query($query_yeast, $brewing) or die(mysql_error());
$row_yeast = mysql_fetch_assoc($yeast);
$totalRows_yeast = mysql_num_rows($yeast);
}

$pageVars = array(
    'source' => $source,
    'current_section' => $section,
    'sections' => array(
        'styles' => 'BJCP Style Information',
        'carbonation' => 'Carbonation Chart',
        'color' => 'Color Chart',
        'hops' => 'Hops',
        'grains' => 'Malts and Grains',
        'yeast' => 'Yeast',
    )
);

ob_start();
if ($section == "styles") { do { include (REFERENCE.'styles.inc.php'); } while ($row_styles = mysql_fetch_assoc($styles)); }
if ($section == "color") include (REFERENCE.'color.inc.php');
if ($section == "hops") { do { include (REFERENCE.'hops.inc.php'); } while ($row_styles = mysql_fetch_assoc($styles)); }
if ($section == "grains") { do { include (REFERENCE.'grains.inc.php'); } while ($row_grains = mysql_fetch_assoc($grains)); }
if ($section == "yeast") { do { include (REFERENCE.'yeast.inc.php'); } while ($row_yeast = mysql_fetch_assoc($yeast)); }
$pageVars['content'] = ob_get_clean();


if ($source != "reference") {
    ob_start();
    include (INCLUDES.'footer2.inc.php');
    $pageVars['footer'] = ob_get_clean();
}

return $twig->render('reference.html.twig', $pageVars);