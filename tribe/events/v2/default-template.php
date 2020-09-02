<?php

/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Display -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.23
 *
 */

if (!defined('ABSPATH')) {
    die('-1');
}

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

Timber::render(array('tribe/default-template.twig'), $context);
