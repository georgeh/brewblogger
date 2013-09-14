<?php
$pageVars = array(
    'page' => $page,
    'news_count' => $totalRows_newsGen,
    'sort' => $sort,
    'dir' => $dir,
    'logged_in' => (isset($_SESSION["loginUsername"]) && !empty($_SESSION["loginUsername"])),
    'view' => $view,
    'news' => array(),
);

do {
    if (empty($row_news)) continue;
    $post = $row_news;
    $post['truncated_text'] = truncate_string($row_news['newsText'],500,'...');
    $pageVars['news'][] = $post;
} while ($row_news = mysql_fetch_assoc($news));

return $twig->render('news.html.twig', $pageVars);