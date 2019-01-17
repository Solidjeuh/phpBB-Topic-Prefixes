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
	'TOPIC_PREFIXES'			=> 'Onderwerp voorvoegsels',
	'TOPIC_PREFIXES_EXPLAIN'	=> 'Vanaf deze pagina kunt u onderwerp voorvoegsels voor forums beheren.',

	'TOPIC_PREFIX_TAG'			=> 'Voorvoegsel tag',
	'TOPIC_PREFIX_ENABLED'		=> 'Voorvoegsel Ingeschakeld',
	'TOPIC_PREFIXES_EMPTY'		=> 'Er zin geen voorvoegsels in dit forum.',
	'TOPIC_PREFIX_PLACEHOLDER'	=> '[Mijn voorvoegsel]',	

	'CREATE_TOPIC_PREFIX'			=> 'Maak een nieuw onderwerp voorvoegsel',
	'DELETE_TOPIC_PREFIX_CONFIRM'	=> 'Weet je zeker dat je het onderwerp voorvoegsel wilt verwijderen??',
	'TOPIC_PREFIX_DELETED'			=> 'Het onderwerp voorvoegsel werd verwijderd.',

	'TOPIC_PREFIX_TOGGLE_STATE'	=> array(
		0	=> 'Klik om in te schakelen',
		1	=> 'Klik om uit te schakelen',
	),

	// Nested set exception messages
	'TOPIC_PREFIXES_LOCK_FAILED_ACQUIRE'	=> 'Onderwerp voorvoegsel extensie faalde om een slot op de tabel te krijgen.',
	'TOPIC_PREFIXES_INVALID_ITEM'			=> 'Het gevraagde onderwerp voorvoegsel bestaat niet.',
	'TOPIC_PREFIXES_INVALID_PARENT'			=> 'Het voorvoegsel van het gevraagde onderwerp heeft geen bovenliggend item.',
));
