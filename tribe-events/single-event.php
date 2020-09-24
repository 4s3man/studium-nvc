<?php

/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Display -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @version 4.6.23
 */
if (!defined('ABSPATH')) {
    die('-1');
}

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

$events_label_plural = tribe_get_event_label_plural();
$context['eventLink'] = esc_url(tribe_get_events_link());
$context['eventLabel'] = sprintf('&laquo; '.esc_html_x('All %s', '%s Events plural label', 'the-events-calendar'), $events_label_plural);

Timber::render(['tribe/default-template.twig'], $context);
