<?php

return $twig->render('recipe/fermentation.html.twig', array(
    'log' => $row_log,
    'pref' => $row_pref,
));
