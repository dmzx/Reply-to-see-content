<?php
/**
*
* @package phpBB Extension - Reply to see content
* @copyright (c) 2020 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, [
	'REPLYTOSEECONTENT_ENABLE' 				=> 'Enable reply to see content',
	'REPLYTOSEECONTENT_ENABLE_EXPLAIN' 		=> 'If set to yes users are able to view only the first post of any topic.<br>The rest of the posts in the topic will be shown when they make a post.',
	'REPLYTOSEECONTENT_URL_HIDE' 			=> 'Hide url in content',
	'REPLYTOSEECONTENT_URL_HIDE_EXPLAIN' 	=> 'If set to yes users don’t see the url link in first topic.',
]);
