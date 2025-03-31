<?php
namespace Lukasbableck\ContaoMoreBackendWidgetsBundle\Widget\Backend;

use Contao\StringUtil;
use Contao\Widget;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy;

class ColorWidget extends Widget {
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
		$GLOBALS['TL_JAVASCRIPT'][] = $package->getUrl('backend.js');
		return \sprintf(
			'<div class="color-widget"><input type="text" name="%s" id="ctrl_%s" class="tl_text%s" value="%s" %s><input type="color" name="%s_color" id="ctrl_%s_color" class="%s" value="#%s" %s></div>',
			$this->name,
			$this->id,
			$this->class ? ' '.$this->class : '',
			StringUtil::specialchars($this->value),
			$this->getAttributes(),
			$this->name,
			$this->id,
			$this->class ? ' '.$this->class : '',
			StringUtil::specialchars($this->value),
			$this->getAttributes()
		);
	}
}
