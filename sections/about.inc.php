<?php

return $twig->render('about.html.twig', array(
    'sidebar' => include(SECTIONS . 'list.inc.php'),
));