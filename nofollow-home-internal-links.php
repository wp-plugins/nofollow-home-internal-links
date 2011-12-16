<?php
/*
Plugin Name: Nofollow Home Internal Links
Plugin URI: http://www.igoseo.net/wordpress-nofollow-home-internal-links.html
Description: This plugin will add the "nofollow" rel attribute to unimportant internal link in the homepage ,including: read more, tag cloud links,post tag,categories,post category,pages,archive links,post author link and comments popup link.Support me by link to my website.
Version: 3.3
Author: Matt Lee
Author URI: http://www.igoseo.net/
*/

/*
Copyright 2011  Matt Lee(Email : igoseonet@gmail.com)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
    
*/

//Adds the "nofollow" rel attribute to "read more" link
add_filter('the_content_more_link','add_nofollow_to_link', 0); 
function add_nofollow_to_link($link) { return str_replace('<a', '<a rel="nofollow"', $link); } 

//nofollow tag_cloud
add_filter('wp_tag_cloud', 'cis_nofollow_tag_cloud');
function cis_nofollow_tag_cloud($text) {
    return str_replace('<a href=', '<a rel="nofollow" href=',$text); 
}

//nofollow posts tags
add_filter('the_tags', 'cis_nofollow_the_tag');
function cis_nofollow_the_tag($text) {
    return str_replace('rel="tag"', 'rel="tag nofollow"', $text);
}

//nofollow archive links
add_filter( 'get_archives_link', 'nofollow_archive' );
function nofollow_archive( $text ) {
	$text = stripslashes($text);
	$text = preg_replace_callback('|<a (.+?)>|i','wp_rel_nofollow_callback', $text);
	return $text;
}
 
//nofollow categories
add_filter( 'wp_list_categories', 'cis_nofollow_wp_list_categories' );
function cis_nofollow_wp_list_categories( $text ) {
$text = stripslashes($text);
$text = preg_replace_callback('|<a (.+?)>|i','wp_rel_nofollow_callback', $text);
return $text;
}
//nofollow post category
add_filter( 'the_category', 'cis_nofollow_the_category' );
function cis_nofollow_the_category( $text ) {
$text = str_replace('rel="category tag"', "", $text);
$text = cis_nofollow_wp_list_categories($text);
return $text;
}

//nofollow pages
add_filter( 'wp_list_pages', 'nofollow_wp_list_pages' );
function nofollow_wp_list_pages( $text ) {
	$text = stripslashes($text);
	$text = preg_replace_callback('|<a (.+?)>|i', 'wp_rel_nofollow_callback', $text);
	return $text;
}

//nofollow post author link
add_filter('the_author_posts_link', 'cis_nofollow_the_author_posts_link');
function cis_nofollow_the_author_posts_link ($link) {
return str_replace('</a><a href=', '<a rel="nofollow" href=',$link); 
}
 
//nofollow comments popup link
add_filter('comments_popup_link_attributes', 'cis_nofollow_comments_popup_link_attributes');
function cis_nofollow_comments_popup_link_attributes () {
echo 'rel="nofollow"';
}
