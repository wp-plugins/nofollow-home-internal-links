=== Nofollow Home Internal Links ===
Contributors: Matt Lee
Tags: nofollow,home internal link,archive,category,pages,seo,read more,google,pagerank,pr
Requires at least: 2.7
Tested up to: 3.2.1
Stable tag: trunk

== Description ==
Home page internal links always take too much pagerank away from homepage.If you want to increase Google PageRank for your website Home page,try using the Nofollow Home Internal Links plugin.

This plugin will add the "nofollow" rel attribute to unimportant internal link in the homepage ,including: read more, tag cloud links,post tag,categories,post category,pages,archive links,post author link and comments popup link. Support me by link to my website.

My website:<a rel="follow" href="http://www.igoseo.net/" target="_blank">http://www.igoseo.net/</a>

For more information,refer to <a rel="follow" href="http://www.igoseo.net/wordpress-nofollow-home-internal-links.html" target="_blank">Nofollow Home Internal Links</a>

Support me by introducing this plugin to your friends, or give me a high rate on WordPress.org .Thank you!

== Installation ==
1. Upload the full directory into your wp-content/plugins directory
2. Activate the plugin at the plugin administration page
3. That's it!

== Frequently Asked Questions ==
=Fatal error: Cannot redeclare add_nofollow_to_link() (previously declared in /.../functions.php:116) in /.../plugins/nofollow_home_internal_links/nofollow_home_internal_links.php on line 29 =

This error means you have already declared add_nofollow_to_link() in your functions.php file in your wordpress theme. To solve this problem, You have two methods:
<ol>
	<li>(Strongly Recommended)Remove "add_filter('the_content_more_link','add_nofollow_to_link', 0);" in nofollow_home_internal_links.php on line 29</li>
	<li>Search your funtions.php file for "add_filter('the_content_more_link','add_nofollow_to_link', 0);" and remove it. (This may cause unkonwn problems and is not recommended)</li>
</ol>
For more information,refer to <a rel="follow" href="http://www.igoseo.net/wordpress-nofollow-home-internal-links.html" target="_blank">Nofollow Home Internal Links</a>

== Screenshots ==

1. nofollow tags,categories and archive links in post or page content.
2. nofollow Archive Widget,Category Widget and Tag Cloud Widget
3. nofollow post tags, read more links and comment pop-up links.

== Changelog ==

= 3.3 =
*First Version

== Upgrade Notice ==
soon...