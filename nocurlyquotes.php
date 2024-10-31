<?php

/*
Plugin Name: No Curly Quotes
Version: 0.1 
Description: stops WordPress turning ' and " into curly quotes in blog posts, titles, excerpts and comments. Options can be set for each element separately. 
Author: Sue Bailey
Author URI: http://blogmum.com
Plugin URI: http://blogmum.com/plugins

Copyright (C) 2009  Sue Bailey

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

//will add options if they don't already exist
add_option("no_curly_quotes_title", 'off', '', 'yes'); 
add_option("no_curly_quotes_content", 'off', '', 'yes'); 
add_option("no_curly_quotes_excerpt", 'off', '', 'yes'); 
add_option("no_curly_quotes_comments", 'off', '', 'yes'); 

//add the admin page
add_action('admin_menu', 'no_curly_quotes_menu');

function no_curly_quotes_menu() {
  add_options_page('No Curly Quotes Options', 'No Curly Quotes', 8, 'blog_mum_no_curly_quotes', 'no_curly_quotes_options');
}

function no_curly_quotes_options() {
  include("optionsform.php");
}


function get_curly_quotes_options(){
 $options = array();
 $options['no_curly_quotes_title'] = get_option(no_curly_quotes_title);
 $options['no_curly_quotes_content'] = get_option(no_curly_quotes_content);
 $options['no_curly_quotes_excerpt'] = get_option(no_curly_quotes_excerpt);
 $options['no_curly_quotes_comments'] = get_option(no_curly_quotes_comments);

return $options;
}

$options = get_curly_quotes_options();
extract($options);

if ($no_curly_quotes_title == "off") { remove_filter('the_title', 'wptexturize'); }
if ($no_curly_quotes_content == "off") { remove_filter('the_content', 'wptexturize'); }
if ($no_curly_quotes_excerpt == "off") { remove_filter('the_excerpt', 'wptexturize'); }
if ($no_curly_quotes_comments == "off") { remove_filter('comment_text', 'wptexturize'); }
?>