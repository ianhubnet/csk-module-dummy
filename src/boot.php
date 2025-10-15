<?php

/**
 * Dummy Module Init
 *
 * @package    CiSkeleton\Modules
 * @category   Dummy\Init
 * @author     Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright  Copyright (c) 2025, Kader Bouyakoub
 * @since      0.1
 */

/**
 * This action adds an alert to dashboard to invite the user to
 * delete this dummy module, it's not needed.
 */
add_action('admin_page_header', function () {
	$message = line('The <strong>Dummy Module</strong> is kept to fill dashboard with dummy content, but also to show you how you can add content to it.', 'dummy', false)."<br />";
	$message .= line('Action: <code>admin_page_header</code>, so this content is visible at the top of all dashboard pages.', 'dummy', false);

	echo driver('hub')->ui->alert($message, 'warning');
});

// --------------------------------------------------------------------

/**
 * Add content to the top of dashboard main page.
 * @since 	2.1
 */
add_action('admin_index_header', function () {
	$heading = '<strong>'.line('Remove this page\'s dummy content.', 'dummy', false).'</strong><br >';
	$message = line('The <code>dummy module</code> displays dummy content on the dashboard. Make sure to delete it on production mode.<br />Action: <code>admin_index_header</code>, so this alert is only visible on dashboard main page.', 'dummy', false);

	echo driver('hub')->ui->alert($heading.$message, 'info');
});

// --------------------------------------------------------------------

/**
 * This how you can add a content to the dashboard main page.
 * @since 	2.1
 */
add_action('admin_index_footer', function () {
	CI_Controller::get_instance()->load->view('dummy/index');
}, 98);

// --------------------------------------------------------------------

/**
 * Display a simple "manifest.json" content in the footer.
 * @since 	2.1
 */
add_action('admin_index_footer', function () {
	driver('hub')->assets->highlight('stackoverflow-dark');

	$content = <<<HTML
<pre class="mt-3 border"><code class="language-php">&lt;?php

return [
	'name'         => 'Dummy Module',
	'description'  => 'This module is here to fill some dashboard pages with dummy content. Delete it to remove all its data.',
	'version'      => '0.1.0',
	'license'      => 'MIT',
	'author'       => 'Kader Bouyakoub',
	'author_uri'   => 'http://bit.ly/KaderGhb',
	'author_email' => 'bkade@mail.com',
	'tags'         => 'csk, codeigniter, skeleton, dummy',

	// translations
	'translations' => [
		'french' => [
			'name'        => 'Module factice',
			'description' => 'Ce module est là pour remplir certaines pages de tableau de bord avec du contenu fictif. Supprimez-le pour supprimer toutes ses données.'
		],
		'arabic' => [
			'name'        => 'موديول وهمي',
			'description' => 'يستخدم هذا الموديول لملء بعض صفحات لوحة التحكم بمحتوى وهمي. احذفه للتخلص من كل بياناته.'
		]
	]
];</code></pre>
HTML;
	echo $content;
}, 99);

// --------------------------------------------------------------------

/**
 * If you want to add an info panel just like ones use to display
 * users, themes or languages count, you can use the
 * "admin_index_stats" action where you echo the info-box element.
 * @see 	the example below and try to follow it.
 * @since 	2.1
 */
add_action('admin_index_stats', function () {
	$output = '<div class="col">';
	$output .= info_box(
		1235,
		'Dummy Stuff',
		'smile-o',
		'javascript:void(0)',
		'olive'
	);
	$output .= '</div>';

	echo $output;
}, 99);
