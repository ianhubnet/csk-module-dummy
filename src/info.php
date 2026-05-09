<?php

/**
 * Module Information File
 *
 * Provides metadata for the module, allowing the module manager
 * and marketplace to identify, display, and manage it.
 *
 * @package     CiSkeleton\Modules
 * @subpackage  Dummy
 * @category    Metadata
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   Copyright (c) 2018-present, Kader Bouyakoub
 */

return [
	// Info.
	'name' => 'Dummy Module',
	'description' => 'This module is here to fill some dashboard pages with dummy content. Delete it to remove all its data.',
	'version' => '0.0.1',
	'version_id' => 1,
	'author' => Platform::AUTHOR,
	'author_uri' => Platform::AUTHOR_URL,
	'author_email' => Platform::AUTHOR_EMAIL,
	'tags' => 'csk, codeigniter, skeleton, dummy',

	// Presentation.
	'icon' => 'flask',
	'icon_fg' => '#ffffff',
	'icon_bg' => '#6c757d',

	// Translations.
	'translations' => [
		'french' => [
			'name' => 'Module factice',
			'description' => 'Ce module est là pour remplir certaines pages de tableau de bord avec du contenu fictif. Supprimez-le pour supprimer toutes ses données.'
		],
		'arabic' => [
			'name' => 'موديول وهمي',
			'description' => 'يستخدم هذا الموديول لملء بعض صفحات لوحة التحكم بمحتوى وهمي. احذفه للتخلص من كل بياناته.'
		]
	]
];
