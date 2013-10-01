<?php
	// Tell PHP where to search for the libs. It won't work without that!
	set_include_path("libs");
	
	// Include and load the lib
	require('libs/Zend/Translate.php');
	Zend_Loader::loadClass('Zend_Translate');
	
	// Init the class
	$translate = new Zend_Translate(
		array(
			'adapter'	=> 'gettext',
			'content'	=> 'locale/en_US/messages.mo',
			'locale'	=> 'en_US'
		)
	);
	
	// Add a translation file (French for example)
	$translate->addTranslation(
		array(
			'content'	=> 'locale/fr_FR/messages.mo',
			'locale'	=> 'fr_FR'
		)
	);
	
	print $translate->_("Home") . "<br />";
	print $translate->_("About") . "<br />";
	
?>