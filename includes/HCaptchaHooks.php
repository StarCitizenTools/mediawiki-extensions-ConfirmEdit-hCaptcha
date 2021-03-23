<?php

class HCaptchaHooks {
	/**
	 * Adds extra variables to the global config
	 *
	 * @param array &$vars Global variables object
	 * @return bool Always true
	 */
	public static function onResourceLoaderGetConfigVars( array &$vars ) {
		global $wgHCaptchaSiteKey;
		//global $wgCaptchaClass;

		//if ( $wgCaptchaClass === 'hCaptcha' ) {
		$vars['wgConfirmEditConfig'] = [
			'hCaptchaSiteKey' => $wgHCaptchaSiteKey,
			'hCaptchaScriptURL' => 'https://hcaptcha.com/1/api.js'
		];
		//}

		return true;
	}
}
