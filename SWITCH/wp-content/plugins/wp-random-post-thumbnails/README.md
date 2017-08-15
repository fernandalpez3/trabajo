# WP Random Post Thumbnails

Allows you to upload images to be used as random images for posts.  This plugin shows one of the uploaded images as the featured image for a post (if the post doesn't have one attached already). Useful if your theme shows thumbnails for the posts, and you don't want any posts without images.

**UPDATE**: Now you can select images specifically for certain post types as well as taxonomy terms.

## Installation

1. Upload the `wp-random-thumbnails` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Configure the plugin by going to Settings > Random Thumbnails.
4. That's it! :)

## Frequently Asked Questions

None yet!

## Changelog

[ 2.1.4 ]

* Fixing a PHP error on activation in PHP 7.

[ 2.1.3 ]

* Fixing a minor PHP warning with WP_DEBUG on.

[ 2.1.2 ]

* Testing to make sure the plugin works in Wordpress 4.7.

[ 2.1.1 ]

* Fixing a minor PHP notice with WP_DEBUG on.

[ 2.1.0 ]

* Fixing an issue with terms in other languages not saving properly in the options page.

[ 2.0.8 ]

* Fixing another minor PHP warning.

[ 2.0.7 ]

* Fixing minor PHP warning when no images are selected.

[ 2.0.6 ]

* Checking whether the term is set before comparing it's value (fixes a PHP notice).

[ 2.0.5 ]

* Fixing a minor PHP warning.

[ 2.0.4 ]

* Fixing a minor PHP warning.

[ 2.0.3 ]

* Adding a 'Settings' link into the plugin action links.

[ 2.0.2 ]

* Fixing issue with $this not being allowed in anonymous functions on older PHP versions.

[ 2.0.1 ]

* Removing the old cmb folder that somehow didn't get removed during the 2.0.0 update.

[ 2.0.0 ]

* Adding support for specifying images for any taxonomy terms.
* Adding support for specifying images specific to post types.
* Code cleanup.
* Updating the options page to make it more organized by using tabs and metaboxes.

[ 1.3.3.1 ]

* Updating some comments and code spacing. No functionality changes.

[ 1.3.3 ]

* Updating the tested up to version.
* Adding a donate link in case anyone would like to be so kind as to donate. :)

[ 1.3.1 ]

* Updating some comments and spacing. No actual functionality changes.

[ 1.3.0 ]

* Fixing PHP warnings that occurred when installing the plugin and not configuring any settings.
* Moving the CMB script inclusion to the main plugin file.

[ 1.2.1 ]

* Fixing an issue when a user doesn't upload any images through the settings page.

[ 1.2.0 ]

* Fixing a fatal error on the options page.
* Removing an unncecessary tag directory.

[ 1.0.0 ] 

* Initial release.