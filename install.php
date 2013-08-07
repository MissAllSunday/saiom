<?php

/**
 *
 * @package SAIOM mod
 * @version 1.0
 * @author Jessica González <suki@missallsunday.com>
 * @copyright Copyright (c) 2013, Jessica González
 * @license http://www.mozilla.org/MPL/2.0/
 */

	if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
		require_once(dirname(__FILE__) . '/SSI.php');

	elseif (!defined('SMF'))
		exit('<b>Error:</b> Cannot install - please verify you put this in the same place as SMF\'s index.php.');

	global $smcFunc, $context;

	db_extend('packages');

	if (empty($context['uninstalling']))
		$smcFunc['db_add_column'](
			'{db_prefix}messages',
			array(
				'name' => 'show_thumbnail',
				'type' => 'int',
				'size' => 1,
				'null' => false
			),
			array(),
			'update',
			null
		);
