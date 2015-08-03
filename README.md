[![Build Status](https://travis-ci.org/kalenjohnson/source-theme.svg?branch=master)](https://travis-ci.org/kalenjohnson/source-theme)

# [Source Theme](http://kalenjohnson.com)

Source is a theme for coders to blog about their code

* Source: [https://github.com/kalenjohnson/source-theme](https://github.com/kalenjohnson/source-theme)
* Homepage: [http://kalenjohnson.com/source-theme/](http://kalenjohnson.com/source-theme/)
* Documentation: [http://kalenjohnson.com/source-theme/docs/](http://kalenjohnson.com/source-theme/docs/)
* Twitter: [@kalenjohnson](https://twitter.com/kalenjohnson)

## Requirements

| Prerequisite    | How to check | How to install
| --------------- | ------------ | ------------- |
| PHP >= 5.4.x    | `php -v`     | [php.net](http://php.net/manual/en/install.php) |

If your server is not running at least PHP 5.4, you will not be able to activate this theme.

## Features

* Clean, dark theme; perfect for coders, developers, or those who love monospace fonts
* [Prism.js](http://prismjs.com/) for code snippets
* [Fontawesome](http://fontawesome.io/) for social media and other icons
* Automatic social media links (thank you for the great idea [Minnow](https://wordpress.org/themes/minnow/))
* Built on [Sage](https://github.com/roots/sage)

Includes theme support for the [Soil](https://github.com/roots/soil) plugin to enable additional features:

* Cleaner output of `wp_head` and enqueued assets
* Root relative URLs
* Nice search (`/search/query/`)

## Installation

### From the WordPress dashboard:
1. Search `Source` in the theme installer
2. Click `Install`

### Manually
1. In your admin panel, go to Appearance -> Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

## Configuration

### Adding social media links
1. Create a new Custom Menu, and assign it to the Social Links menu location.
2. Add links to each of your social services using the Links panel.
3. Icons for your social links will appear in the slide-out menu.

## Theme Development

Source was built using [Sage](https://github.com/roots/sage). Please refer to Sage [documentation](https://roots.io/sage/docs/) on how to use gulp, Bower, etc.

## Changelog

Full commit history [here](https://github.com/kalenjohnson/source-theme/commits/master)

0.0.7 - August 03, 2015  - No dotfiles in composer archive, fix wpupdatephp text, fix theme versions
0.0.6 - June 04, 2015    - Wrapping all theme functions in PHP check
0.0.5 - June 02, 2015    - Fixing short array syntax when less than PHP 5.4, added vendor folder to Composer archive command
0.0.4 - June 02, 2015    - Fixing PHP >5.4 issue, css minification URL issue
0.0.3 - May 10, 2015     - Fixing issue with .zip upload
0.0.2 - May 10, 2015     - Fixing small issues for theme repo
0.0.1 - April 08, 2015   - Original release, uploaded to WP Theme repo!
