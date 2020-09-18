<?php
/*
 * Template Name: Front template
 * description: Page with signups on the bottom
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render('template-front.twig', $context);
