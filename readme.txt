=== The Excerpt Block ===
Tags: the excerpt, stand-first paragraph, post summary
Requires at least: 4.9.8
Tested up to: 5.0
Requires PHP: 5.6
Stable tag: 0.1
License: GPL3 or later
License URI: https://www.gnu.org/licenses/gpl.html
Contributors: gonzomir

The plugin adds special block for editing post excerpt and block editor template for posts that contain the excerpt block and a paragraph block to encourage authors to write excerpts for their posts.

== Description ==

The plugin adds special block for editing post excerpt and block editor template for posts that contain the excerpt block and a paragraph block to encourage authors to write excerpts for their posts.

== Installation ==

1. Extract the zip file and upload the folder `the-excerpt` to the `/wp-content/plugins` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. When you write new post, the excerpt block will always appear at the top.

== Changelog ==

= 0.1 =
Initial release

== Theme developers ==

If you want to use the excerpt as a stand first paragraph on single post pages, add something like this to `single.php`:

```
<?php if ( has_excerpt() ) : ?>
  <div class="post-summary">
    <?php the_excerpt(); ?>
  </div>
<?php endif; ?>
```

== Credits ==

This project was bootstrapped with [Create Guten Block](https://github.com/ahmadawais/create-guten-block).
It copies the functionality of the excerpt panel from the [Gutenberg editor](https://github.com/wordpress/gutenberg).
