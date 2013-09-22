<?php

$pageVars = array(
    'id' => $id,
    'color1' => $color1,
    'color2' => $color2,
    'reviews' => array(),
);

do {
    if (!$row_review) continue;
    $reviewItem = $row_review;
    $reviewItem['taste_calc'] = ($row_review['brewAromaScore'] + $row_review['brewAppearanceScore'] + $row_review['brewFlavorScore'] + $row_review['brewMouthfeelScore'] + $row_review['brewOverallScore']);
    $pageVars['reviews'][] = $reviewItem;
} while ($row_review = mysql_fetch_assoc($review));

return $twig->render('recipe/reviews.html.twig', $pageVars);