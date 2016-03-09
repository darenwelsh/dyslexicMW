<?php
/**
 * The dyslexicMW extension allows MW users to experience what it is like for someone with dyslexia to read
 *
 * Documentation: https://github.com/darenwelsh/dyslexicMW
 * Support:       https://github.com/darenwelsh/dyslexicMW
 * Source code:   https://github.com/darenwelsh/dyslexicMW
 * 
 * @file dyslexicMW.class.php
 * @addtogroup Extensions
 * @author Daren Welsh
 * @copyright © 2016 by Daren Welsh
 * @licence GNU GPL v3+
 */

class dyslexicMW
{
	static function addResources (&$out, &$skin) {
		$out->addModules( 'ext.dyslexicMW.base' );
	}

}

