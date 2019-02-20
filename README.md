# ssws-corporate-theme-2019

WordPress conversion from modern static HTML/JS template to dynamic theme

### TODO

- [x] Functions.php class and templates
- [x] Header
- [ ] Dynamic Navigation
- [ ] Dynamic Posts
- [x] General Styles import
- [x] Basic/Initial OOP steps for files, definitions
- [ ] Sidebars
- [ ] WP modern template breakdown structure
- [ ] SASS
- [x] Footer
- [ ] Documentation
- [ ] Screenshot

## Documentation and step-by-step guide

- rename index.html to index.php
- create style.css
- create functions.php
- in `index.php` add `wp_head()` and `wp_footer()` to show the admin bar
- later `header` and `footer` will be placed in their own template files
- change all the `<head>` meta tags from static to WP functions:

```
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title><?php bloginfo( 'name' ); ?><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="<?php bloginfo("description"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="slideshow, reveal, effect, animation, web design, template, demo" />
	<meta name="author" content="Codrops" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico">

	<?php wp_head(); ?>
</head>
```

- Remove all the static links to scripts and styles and enqueue them into `functions.php`

```
/* Enqueue scripts and styles */

function ssws_scripts(){
  wp_enqueue_style( 'ssws-style', get_stylesheet_uri() );

    wp_register_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '20190211', true );
    wp_register_script('TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', array(), '20190211', true );
    wp_register_script('demo', get_template_directory_uri() . '/js/demo.js', array(), '20190211', true );

    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', $ver = false, $in_footer = true );
    wp_enqueue_script( 'TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', $ver = false, $in_footer = true );
    wp_enqueue_script( 'demo', get_template_directory_uri() . '/js/demo.js', $ver = false, $in_footer = true );
}
add_action( 'wp_enqueue_scripts', 'ssws_scripts' );
```

- make sure all the scripts in the footer/header are actually removed from the `index.php` file and placed in a propererly enqueued `js/app.js`
- create `header.php` and `footer.php` template files
- paste in each of the above 2 files the portion of code that we want to have consistently throughout all the posts and pages
- replace in `index.php` the header and footer code with `get_header()` and `get_footer()`
-
