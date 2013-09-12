<?php

return $twig->render('recipe/general.html.twig', array(
    'log' => $brewLog,
    'page' => $page,
));
