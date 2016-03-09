<?php
/**
 * The dyslexicMW extension allows MW users to experience what it is like for someone with dyslexia to read
 *
 * Documentation: https://github.com/darenwelsh/dyslexicMW
 * Support:       https://github.com/darenwelsh/dyslexicMW
 * Source code:   https://github.com/darenwelsh/dyslexicMW
 * 
 * @file dyslexicMW.php
 * @addtogroup Extensions
 * @author Daren Welsh
 * @copyright © 2016 by Daren Welsh
 * @licence GNU GPL v3+
 */

# Not a valid entry point, skip unless MEDIAWIKI is defined
if (!defined('MEDIAWIKI')) {
	die( "dyslexicMW extension" );
}

$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'Dyslexic MediaWiki',
	'url'            => 'http://github.com/darenwelsh/dyslexicMW',
	'author'         => '[https://www.mediawiki.org/wiki/User:Darenwelsh Daren Welsh]',
	'descriptionmsg' => 'dyslexicMW-desc',
	'version'        => '0.0.1'
);

# $dir: the directory of this file, e.g. something like:
#	1)	/var/www/wiki/extensions/BlankParserFunction
# 	2)	C:/xampp/htdocs/wiki/extensions/BlankParserFunction
$dir = dirname( __FILE__ ) . '/';


# Internationalization
$wgExtensionMessagesFiles['dyslexicMW'] = $dir . 'dyslexicMW.i18n.php';

$wgResourceModules['ext.dyslexicMW.base'] = array(
	'scripts' => array( 'dyslexicMW.js', ),
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'dyslexicMW',
	'position' => 'top',
);

