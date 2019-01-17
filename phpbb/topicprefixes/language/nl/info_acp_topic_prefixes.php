<?php
/**
 *
 * Topic Prefixes extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_TOPIC_PREFIXES'	=> 'Onderwerp voorvoegsels',
	'ACP_MANAGE_PREFIXES'	=> 'Beheer voorvoegsels',

	// ACP Log messages
	'ACP_LOG_PREFIX_ADDED'		=> '<strong>Nieuw voorvoegsel voor onderwerp aangemaakt</strong><br>» %1$s in forum: %2$s',
	'ACP_LOG_PREFIX_DELETED'	=> '<strong>Voorvoegsel voor onderwerp verwijderd</strong><br>» %1$s in forum: %2$s',
));
