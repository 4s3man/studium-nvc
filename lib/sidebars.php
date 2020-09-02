<?php

register_sidebar(array(
    'name'          => __('Idea', C_TEXTDOMAIN),
    'id'            => 'idea',
    'description'   => __('Dodaj opisy w istniejących tagach html', C_TEXTDOMAIN),
    'before_widget' => '<div id="idea" class="jumbotron text-center helvetica n-helv"><div class="container mx-auto">',
    'after_widget'  => '</div></div>',
    'before_title'  => '<h3 class="text-4xl">',
    'after_title'   => '</h3>'
));

register_sidebar(array(
    'name'          => __('Slider', C_TEXTDOMAIN),
    'id'            => 'slider',
    'description'   => __('Main slider', C_TEXTDOMAIN),
    'before_widget' => '<div class="studiumnvc_slider">',
    'after_widget'  => '</div>',
));

register_sidebar(array(
    'id'            => 'harmonogram',
    'name'          => __('Harmonogram', C_TEXTDOMAIN),
    'description'   => __('Widget z harmonogramem, C_TEXTDOMAIN'),
    'before_widget' => '<div id="harmonogram">',
    'after_widget'  => '</div>',
));

register_sidebar(array(
    'name'          => __('Logistyka', C_TEXTDOMAIN),
    'id'            => 'logistic',
    'description'   => __('Wstaw treść w ten sposób <cos> Wstawiana treść </cos>', C_TEXTDOMAIN),
    'before_widget' => '<div class="mx-auto container pt-0 jumbotron text-center">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="text-4xl">',
    'after_title'   => '</h3>'
));

register_sidebar(array(
    'name'          => __('Trenerzy', C_TEXTDOMAIN),
    'id'            => 'coachs',
    'description'   => __('Tytuł i podtytuł w sekcji trenerzy', C_TEXTDOMAIN),
    'before_widget' => '<h4 class="h5">',
    'after_widget'  => '</h4>',
    'before_title'  => '<h2 class="text-5xl">',
    'after_title'   => '</h2>'
));

register_sidebar(array(
    'name'          => __('Zapisy', C_TEXTDOMAIN),
    'id'            => 'singups',
    'description'   => __('Text opisujący zapisy', C_TEXTDOMAIN),
    'before_widget' => '<div class="mx-auto jumbotron text-center">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="text-5xl">',
    'after_title'   => '</h2>'
));

register_sidebar(array(
    'name'          => __('Kontakt', C_TEXTDOMAIN),
    'id'            => 'contact',
    'description'   => __('Dodaj opisy w istniejących tagach html', C_TEXTDOMAIN),
    'before_widget' => '<div id="kontakt" class="jumbotron text-center container mx-auto">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="text-5xl">',
    'after_title'   => '</h2>'
));

register_sidebar(array(
    'id'            => 'newsletter',
    'name'          => __('Newsletter', C_TEXTDOMAIN),
    'description'   => __('zapisy na newsletter', C_TEXTDOMAIN),
    'before_widget' => '<div class="sidebar-outer"><div class="sidebar-header"><h5>Newsletter</h5></div><div class="sidebar-content"><h3>Zapisz się na newsletter</h3>',
    'after_widget' => '</div></div>'
));

register_sidebar(array(
    'id'            => 'footer1',
    'name'          => __('Footer column 1', C_TEXTDOMAIN),
    'description'   => __('Footer column 1', C_TEXTDOMAIN),
    'before_widget' => '<div class="column col-md-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<h6 class="hidden">',
    'after_title'   => '</h6>'
));

register_sidebar(array(
    'id'            => 'footer2',
    'name'          => __('footer column 2', C_TEXTDOMAIN),
    'description'   => __('Footer column 2', C_TEXTDOMAIN),
    'before_widget' => '<div class="column col-md-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<h6 class="hidden">',
    'after_title'   => '</h6>'
));

register_sidebar(array(
    'id'            => 'footer3',
    'name'          => __('Footer column 3', C_TEXTDOMAIN),
    'description'   => __('Footer column 3', C_TEXTDOMAIN),
    'before_widget' => '<div class="column col-md-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<h6 class="hidden">',
    'after_title'   => '</h6>'
));
