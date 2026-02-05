<?php

$pages = [
    'Home' => 'index.php',
    'Directory' => 'directory.php',
    'Giving' => 'donations.php',
    'Events' => 'events.php'
];

function generateMenu($items){
    $html = "";
    foreach ($items as $page => $url) {
        $html .= "<li><a href='$url'>$page</a></li>";
    }

    return $html;
}
?>