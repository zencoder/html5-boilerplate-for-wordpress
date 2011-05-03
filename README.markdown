HTML5 Boilerplate for Wordpress
===============================

This theme is built on the [HTML5 Boilerplate](http://html5boilerplate.com/) by Paul Irish and Divya Manian. The sole purpose of this theme is to save developers the time it takes to apply the HTML5 Boilerplate to WordPress. The "HTML5 Boilerplate" name is used with permission from Paul Irish. (This is from the original file by zencoder. [Walker](http://github.com/walker) forked his and assumes this is still alright to use.)

The layout is based on Bruce Lawson's [Designing a Blog with HTML5](http://html5doctor.com/designing-a-blog-with-html5/)

Instead of using only DIVs for content layout, it uses new HTML5 tags, including [header](http://html5doctor.com/the-header-element/), 
[footer](http://www.w3schools.com/html5/tag_footer.asp), 
[nav](http://www.w3schools.com/html5/tag_nav.asp), 
[article](http://www.w3schools.com/html5/tag_article.asp), 
and [section](http://html5doctor.com/the-section-element/).

It's a very bare layout, including only the base styles that come with the boilerplate and required WordPress styles, so layout is up to you. Alternatively, you could apply the methods used here to other themes.

To Get Repo & Submodules
--------------
1. `git clone git@github.com:walker/html5-boilerplate-for-wordpress.git`
2. `cd html4-boilerplate-for-wordpress`
3. `git submodule init`
4. `git submodule update`

Getting Started
---------------
1. Add the html5-boilerplate-for-wordpress folder to your wp-content/themes folder.
2. Activate the theme. WP-Admin > Appearance > Themes
3. Add some of the "Root Files" to the root directory of your website (explained below).
4. Style away, knowing that you're building on a super solid base with HTML5 awesomeness.

To Build Your Theme for Production
---------------
1. `cd [path to themes dir]/html5-boilerplate-for-wordpress/build`
2. `ant build` (or `ant minify`)
3. Change the folder created called "publish" to the name of your theme. Upload that folder to your server. That folder becomes your main theme directory on your production server.


Root Files
----------
These files can be found in the theme. Some of the files listed here should be (carefully) moved to the root of your site (same level as the wp-content directory). Read on for specific instructions.

### 404 Page
If you use permanlinks (WP-Admin > Settings > Permalinks), then WordPress handles any 404s with the 404.php included in the theme.

### .htaccess
**Do not copy to the root of your site.** This may overwrite the WordPress htaccess, and break Wordpress. Instead, copy and paste the contents of this file to the .htaccess already at the root of your site, after the existing content. It would be good to make a comment where the Boilerplate content begins, like "# Begin HTML5 Boilerplate". Read htaccess file for more info on what it does.
**This file may not be visible if you're viewing the folder on your computer. Files that start with a "." are often hidden. It should be visible through your FTP browser once uploaded.**

### crossdomain.xml
If you don't know what this is, you probably don't need it.
www.adobe.com/devnet/flashplayer/articles/cross_domain_policy.html

### robots.txt
Tells all search engines that they can read and index all pages. This is handled by WordPress so you shouldn't need to move this to the root.

Root Images
-----------
These are some images you might put in your site root.

### favicon.ico
The favicon is the icon shown to the left of the URL at the top of your browser window. You should move this to the root of your site (same level as the wp-content directory) if you can.

### apple-touch-icon.png
On iPhones and iPads you can book mark a web page and have it show up on the home screen as an icon. The apple-touch-icon.png becomes this icon if used. Rounded corners and glossy finish are added by the device. You should move this to the root of your site (same level as the wp-content directory) if you can.

