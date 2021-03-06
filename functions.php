<?php

// If the Timber plugin isn't activated, print a notice in the admin.
if (!class_exists('Timber')) {
    add_action('admin_notices', function () {
        echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="'.esc_url(admin_url('plugins.php#timber')).'">'.esc_url(admin_url('plugins.php')).'</a></p></div>';
    });

    return;
}

// Create our version of the TimberSite object
class StarterSite extends TimberSite
{
    // This function applies some fundamental WordPress setup, as well as our functions to include custom post types and taxonomies.
    public function __construct()
    {
        add_theme_support('post-formats');
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        add_filter('timber_context', [$this, 'add_to_context']);
        add_action('init', [$this, 'register_post_types']);
        add_action('init', [$this, 'register_taxonomies']);
        add_action('init', [$this, 'register_menus']);
        add_action('init', [$this, 'register_widgets']);
        add_action('init', [$this, 'register_sidebars']);
        add_action('init', [$this, 'register_shortcodes']);
        parent::__construct();
    }

    // Abstracting long chunks of code.

    // The following included files only need to contain the arguments and register_whatever functions. They are applied to WordPress in these functions that are hooked to init above.

    // The point of having separate files is solely to save space in this file. Think of them as a standard PHP include or require.

    public function register_sidebars()
    {
        require 'lib/sidebars.php';
    }

    public function register_post_types()
    {
        require 'lib/custom-types.php';
    }

    public function register_taxonomies()
    {
        require 'lib/taxonomies.php';
    }

    public function register_menus()
    {
        require 'lib/menus.php';
    }

    public function register_widgets()
    {
        require 'lib/widgets.php';
    }

    public function register_shortcodes()
    {
        require 'lib/shortcodes.php';
    }

    // Access data site-wide.

    // This function adds data to the global context of your site. In less-jargon-y terms, any values in this function are available on any view of your website. Anything that occurs on every page should be added here.

    public function add_to_context($context)
    {
        // Our menu occurs on every page, so we add it to the global context.
        $context['menu'] = new TimberMenu();
        $context['idea'] = Timber::get_widgets('idea');
        $context['slider'] = Timber::get_widgets('slider');
        $context['harmonogram'] = Timber::get_widgets('harmonogram');
        $context['logistic'] = Timber::get_widgets('logistic');
        $context['coachs'] = Timber::get_widgets('coachs');
        $context['singups'] = Timber::get_widgets('singups');
        $context['contact'] = Timber::get_widgets('contact');
        $context['newsletter'] = Timber::get_widgets('newsletter');
        $context['footer1'] = Timber::get_widgets('footer1');
        $context['footer2'] = Timber::get_widgets('footer2');
        $context['footer3'] = Timber::get_widgets('footer3');

        // This 'site' context below allows you to access main site information like the site title or description.
        $context['site'] = $this;

        return $context;
    }
}

new StarterSite();

/*
 *
 * My Functions (not from Timber)
 *
 */

// Enqueue scripts
function my_scripts()
{
    // Use jQuery from a CDN
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', [], null, true);

    // Enqueue our stylesheet and JS file with a jQuery dependency.
    // Note that we aren't using WordPress' default style.css, and instead enqueueing the file of compiled Sass.
    wp_enqueue_style('studium-nvc-main-styles', get_template_directory_uri().'/public/main.css', 1.0);
    wp_enqueue_script('studium-nvc-main-js', get_template_directory_uri().'/public/main.js', ['jquery'], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'my_scripts');
