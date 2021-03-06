# Exopite-starter child ready WordPress Theme based on _s
## This is a WordPress starter theme, based on _s with some extra features and child theme
### Using _s (Underscores), Bootstrap 4.1, Theme Hook Alliance, JavaScript Hooks, Font Awesome 4.7

I like underscores, Bootstrap and Theme Hook Alliance. it is existing underscores and Bootstrap [UnderStrap](https://github.com/holger1411/understrap) or underscores and Theme Hook Alliance [hook_s](https://github.com/bradp/hook_s) but not together, and because I do not want to start always from scratch, I build it for myself and for anybody who want it.

Child theme ready wordpres theme: this theme is not only child theme ready, child theme already included.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A helpful full width page template.
* A custom header implementation in `include/custom-header.php` just add the code snippet found in the comments of `include/custom-header.php` to your `header.php` template.
* Custom template tags in `include/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `include/extras.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Licensed under GPLv2 or later. :) Use it to make something cool.
* [Bootstrap 4.1](https://github.com/twbs/bootstrap/) from CDN
* [Font Awesome 4.7](https://github.com/FortAwesome/Font-Awesome) from CDN
* [Theme Hook Alliance](https://github.com/zamoose/themehookalliance)
* [_s](https://github.com/Automattic/_s)
* [JavaScript Hook and Filter system](https://github.com/carldanley/WP-JS-Hooks)
* Child theme ready, child theme included.

Getting Started (form original underscores/_s)
---------------

### underscores/_s only

If you want to keep it simple, head over to http://underscores.me and generate your `_s` based theme from there. You just input the name of the theme you want to create, click the "Generate" button, and you get your ready-to-awesomize starter theme.

### underscores/_s and exopite-starter

If you want to set things up manually, download `exopite-starter` from GitHub. The first thing you want to do is copy the `exopite-starter` directory and change the name to something else (like, say, `megatherium`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'exopite-starter'` (inside single quotations) to capture the text domain.
2. Search for `exopite-starter_` to capture all the function names.
3. Search for `Text Domain: exopite-starter` in style.css.
4. Search for <code>&nbsp;exopite-starter</code> (with a space before it) to capture DocBlocks.
5. Search for `exopite-starter-` to capture prefixed handles.

OR

* Search for: `'exopite-starter'` and replace with: `'megatherium'`
* Search for: `exopite-starter_` and replace with: `megatherium_`
* Search for: `Text Domain: exopite-starter` and replace with: `Text Domain: megatherium` in style.css.
* Search for: <code>&nbsp;exopite-starter</code> and replace with: <code>&nbsp;Megatherium</code>
* Search for: `exopite-starter-` and replace with: `megatherium-`

Then, update the stylesheet header in `style.css` and the links in `footer.php` with your own information. Next, update or delete this readme.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck and happy coding!

CHANGELOG
---------

= 20180415 - Apr 15 2018 =
* Update: Update to Bootstrap 4.1.0

= 20180123 - Jan 23 2018 =
* Update: Update to Bootstrap 4.0.0 (beta 3)

= 20171202 - Dec 02 2017 =
* Update: Update to Bootstrap 4.0.0 beta 2

= 20170921 - Sep 21 2017 =
* Update: Update to Bootstrap 4.0.0 beta

= 1.3 - 2017-06-12 =
* Rename to avoid conflict with Exopite Theme
* Child theme ready
* Include child theme

= 1.2 - 2017-03-27 =
* Update to newest _s
* Fix: some minor code refactroing

= 1.1 - 2017-03-23 =
* Add: Check ABSPATH for security
* Add: Basic schema.org itemscope and itemtype for better SEO
* Add: Header rel="canonical" for better SEO
* Add: Enqueue scripts and styles with automatic versioning
* Add: Lightweight JavaScript event/hook manager for WordPress
https://github.com/carldanley/WP-JS-Hooks
* Fix: Code refactor and add some comments for better readability

= 1.0.1 =
* Fix: Fix sidebar position
* Fix: Remove tha_content_before() and tha_content_top() because it belong to content.php
* Fix: Add btn Bootstrap class to submit button
* Fix: Combine post meta to one function
* Fix: JS: Add try catch for hooks

= 1.0 =
* Initial release.

LICENSE DETAILS
---------------
The GPL license of Exopite Frontend Notifications grants you the right to use, study, share (copy), modify and (re)distribute the software, as long as these license terms are retained.

SUPPORT/UPDATES/CONTRIBUTIONS
-----------------------------

If you use my program(s), I would **greatly appreciate it if you kindly give me some suggestions/feedback**. If you solve some issue or fix some bugs or add a new feature, please share with me or mke a pull request. (But I don't have to agree with you or necessarily follow your advice.)

**Before open an issue** please read the readme (if any :) ), use google and your brain to try to solve the issue by yourself. After all, Github is for developers.

My **updates will be irregular**, because if the current stage of the program fulfills all of my needs or I do not encounter any bugs, then I have nothing to do.

**I provide no support.** I wrote these programs for myself. For fun. For free. In my free time. It does not have to work for everyone. However, that does not mean that I do not want to help.

I've always tested my codes very hard, but it's impossible to test all possible scenarios. Most of the problem could be solved by a simple google search in a matter of minutes. I do the same thing if I download and use a plugin and I run into some errors/bugs.

DISCLAMER
---------

NO WARRANTY OF ANY KIND! USE THIS SOFTWARES AND INFORMATIONS AT YOUR OWN RISK!
[READ DISCLAMER!](https://joe.szalai.org/disclaimer/)
License: GNU General Public License v3

[![forthebadge](http://forthebadge.com/images/badges/built-by-developers.svg)](http://forthebadge.com) [![forthebadge](http://forthebadge.com/images/badges/for-you.svg)](http://forthebadge.com)
