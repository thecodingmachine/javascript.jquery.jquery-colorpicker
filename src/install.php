<?php
use Mouf\Html\Utils\WebLibraryManager\WebLibraryInstaller;

require_once __DIR__."/../../autoload.php";

use Mouf\Actions\InstallUtils;
use Mouf\MoufManager;

// Let's init Mouf
InstallUtils::init(InstallUtils::$INIT_APP);

// Let's create the instance
$moufManager = MoufManager::getMoufManager();

WebLibraryInstaller::installLibrary("jQueryColorPickerLibrary",
	array('vendor/mouf/javascript.jquery.jquery-colorpicker/js/colorpicker.js'),
	array('vendor/mouf/javascript.jquery.jquery-colorpicker/css/colorpicker.css', 'vendor/mouf/javascript.jquery.jquery-colorpicker/css/colorpicker-widget.css'),
	array('jQueryLibrary'),
	true
);

// Let's rewrite the MoufComponents.php file to save the component
$moufManager->rewriteMouf();

// Finally, let's continue the install
InstallUtils::continueInstall();