<?php

function linkBtn_func($atts)
{
    $link = $atts['link'] ?? null;
    if (!$link || empty($link)) {
        return '';
    }
    $class = isset($atts['class']) ? str_replace(',', ' ', $atts['class']) : 'float-right';

    $text = $atts['text'] ?? 'Zapisz się';

    return <<<EOF
    <div class="linkBtn">
        <a class="inline-block btn m-2 $class bg-orange-400 hover:bg-orange-500 p-1 rounded font-bold text-white p-4 rounded hover:text-white" href="$link">$text</a>
    </div>
EOF;
}
add_shortcode('linkBtn', 'linkBtn_func');
