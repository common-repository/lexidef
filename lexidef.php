<?php
/*
Plugin Name: Link to Dictionary Meaning
Plugin URI: http://www.beedictionary.com/
Description: Quickly set links to Bee English dictionary definitions of words/phrases containing meaning, audio, phonetics, usages and other informations.
Version: 0.9.2
Author: Bee Dictionary
Author URI: http://vineet.dwivedi.me
*/

/*  Copyright 2010  Bee English  Dictionary

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function bd_parse_links($content) {
  $content = eregi_replace("{ld:([^}]+)}","<a title='definition of \\1' href='http://www.beedictionary.com/definition/\\1' target='_blank'>\\1</a>", $content);
  $content = eregi_replace("{bd:([^}]+)}","<a title='definition of \\1' href='http://www.beedictionary.com/definition/\\1' target='_blank'>\\1</a>", $content);
  return $content;
}

add_filter('the_content', 'bd_parse_links');
?>