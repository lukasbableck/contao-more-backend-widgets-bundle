<?php
namespace Lukasbableck\ContaoMoreBackendWidgetsBundle\Widget\Backend;

use Contao\StringUtil;
use Contao\Widget;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy;

class RangeWidget extends Widget {
	protected $blnSubmitInput = true;
	protected $blnForAttribute = true;
	protected $strTemplate = 'be_widget';

	public function __set($strKey, $varValue): void {
		switch ($strKey) {
			case 'maxval':
				$this->arrAttributes['max'] = $varValue;
				break;
			case 'minval':
				$this->arrAttributes['min'] = $varValue;
				break;
			case 'step':
				if ($varValue > 0) {
					$this->arrAttributes['step'] = $varValue;
				}
				break;
			default:
				parent::__set($strKey, $varValue);
				break;
		}
	}

	public function generate(): string {
		$package = new Package(new JsonManifestVersionStrategy(__DIR__.'/../../../public/manifest.json'));
		$GLOBALS['TL_CSS'][] = $package->getUrl('backend.css');
		return \sprintf(
			'<input type="range" name="%s" id="ctrl_%s" class="tl_range_widget%s" value="%s" %s>',
			$this->name,
			$this->id,
			$this->class ? ' '.$this->class : '',
			StringUtil::specialchars($this->value),
			$this->getAttributes()
		);
	}
}
