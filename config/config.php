<?php
/*
 * BASIC
 */
$config['site_title'] = 'Primoris Academy';  // Site title
$config['base_url'] = '';                    // Override base URL (e.g. http://example.com)
// $config['rewrite_url'] = true;               // A boolean indicating forced URL rewriting

/*
 * THEME
 */
// $config['theme'] = 'angel';                // Set the theme (defaults to "default")
// $config['twig_config'] = array(              // Twig settings
//     'cache' => false,                        // To enable Twig caching change this to a path to a writable directory
//     'autoescape' => false,                   // Auto-escape Twig vars
//     'debug' => false                         // Enable Twig debug
// );

/*
 * CONTENT
 */
// $config['date_format'] = '%D %T';            // Set the PHP date format as described here: http://php.net/manual/en/function.strftime.php
// $config['pages_order_by'] = 'alpha';         // Order pages by "alpha" or "date"
// $config['pages_order'] = 'asc';              // Order pages "asc" or "desc"
$config['content_dir'] = 'content/';  // Content directory
$config['content_ext'] = '.md';              // File extension of content files to serve

/*
 * TIMEZONE
 */
// $config['timezone'] = 'UTC';                 // Timezone may be required by your php install

/*
 * PLUGINS
 */
// $config['DummyPlugin.enabled'] = true;      // Force DummyPlugin to be disabled

/*
 * CUSTOM
 */
// $config['custom_setting'] = 'Hello';         // Can be accessed by {{ config.custom_setting }} in a theme
