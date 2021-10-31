<?php

return [
	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
	'creator'               => 'Laravel Pdf',
	'display_mode'          => 'fullpage',
	'tempDir'               => base_path('../temp/'),
	'font_path' => base_path('public/css/fonts/'),
	'font_data' => [
	   'fa' => [
		  'R'  => 'ttf/IRANSansWeb.ttf',
		  'B'  => 'ttf/IRANSansWeb_Bold.ttf',
		  'useOTL' => 0xFF,
		  'useKashida' => 75,
	   ],
	   'en' => [
		  'R'  => 'Gothic/Century Gothic.ttf',
		  'B'  => 'Gothic/GOTHICB.ttf',
	   ]
	]
];