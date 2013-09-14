<?php
return $twig->render('includes/footer.html.twig', array(
    'name' => $row_name,
    'version' => $version,
    'image_src' => $imageSrc,
));