<?php

function linkBtn($atts)
{
    $link = $atts['link'] ?? null;
    if (!$link || empty($link)) {
        return '';
    }

    return Timber::render('shortcodes/linkButton.twig', ['atts' => $atts]);
}
add_shortcode('linkBtn', 'linkBtn');
