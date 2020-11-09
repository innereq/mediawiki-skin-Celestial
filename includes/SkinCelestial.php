<?php
/**
 * SkinTemplate class for the Celestial skin
 *
 * @ingroup Skins
 */
class SkinCelestial extends SkinTemplate {
	/** @var string */
	public $skinname = 'celestial';

	/** @var string */
	public $stylename = 'Celestial';

	/** @var string */
	public $template = 'CelestialTemplate';

	/**
	 * @param OutputPage $out
	 */
	public function initPage( OutputPage $out ) {
		parent::initPage( $out );

		$out->addMeta( 'viewport',
			'width=device-width, initial-scale=1.0, ' .
			'user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0'
		);

		$out->addModuleStyles( [
			'mediawiki.skinning.content.externallinks',
			'skins.celestial',
		] );
		$out->addModules( [
			'skins.celestial.js',
			'skins.celestial.mobile'
		] );

		// Basic IE support without flexbox
		$out->addStyle( $this->stylename . '/resources/IE9fixes.css', 'screen', 'IE' );
	}
}
