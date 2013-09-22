<?php
$pageVars = array(
    'page'               => $page,
    'pref'               => $row_pref,
    'totalRows_awardGen' => $totalRows_awardGen,
    'logged_in'          => isset($_SESSION["loginUsername"]),
    'user'               => isset($row_user)?$row_user:array(),
);

ob_start();
sessionAuthenticateNav();
$pageVars['session_authenticate_nav'] = ob_get_clean();

return $twig->render('includes/navigation.html.twig', $pageVars);
