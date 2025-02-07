<?php 

require 'Article.php';
require 'Page.php';

$article = new Article('Title', 'Helle, There how are you all', 'TahirAhmed');
$page = new Page('This is the title', 'This is the main content of the page.');
echo $article->render();

echo '<br>';

echo $page->render();