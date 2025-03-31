<?php
namespace Lukasbableck\ContaoMoreBackendWidgetsBundle\Widget\Backend;

use Contao\Widget;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy;

class CharPickerWidget extends Widget {
	protected $blnSubmitInput = true;
	protected $blnForAttribute = true;
	protected $strTemplate = 'be_widget';

	public function __set($strKey, $varValue): void {
		switch ($strKey) {
			default:
				parent::__set($strKey, $varValue);
				break;
		}
	}

	public function generate(): string {
		$package = new Package(new JsonManifestVersionStrategy(__DIR__.'/../../../public/manifest.json'));
		$GLOBALS['TL_CSS'][] = $package->getUrl('backend.css');
		$widget = \sprintf(
			"<div name='%s' id='ctrl_%s' class='char-picker %s' %s>",
			$this->name,
			$this->id,
			$this->class ? ' '.$this->class : '',
			$this->getAttributes()
		);
		foreach ($this->options as $char) {
			$char = $char['value'];
			$widget .= "<button type='button' class='char-picker-button' data-char='$char'>$char</button>";
		}
		$widget .= '</div>';

		return $widget;
	}
}
