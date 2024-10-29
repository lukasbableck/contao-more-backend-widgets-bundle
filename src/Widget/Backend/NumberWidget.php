<?php
namespace Lukasbableck\ContaoMoreBackendWidgetsBundle\Widget\Backend;

use Contao\StringUtil;
use Contao\Widget;

class NumberWidget extends Widget {
	protected $blnSubmitInput = true;
	protected $blnForAttribute = true;
	protected $strTemplate = 'be_widget';

	public function __set($strKey, $varValue): void {
		switch ($strKey) {
			case 'maxval':
				if ($varValue > 0) {
					$this->arrAttributes['max'] = $varValue;
				}
				break;
			case 'minval':
				if ($varValue > 0) {
					$this->arrAttributes['min'] = $varValue;
				}
				break;
			case 'step':
				if ($varValue > 0) {
					$this->arrAttributes['step'] = $varValue;
				}
				break;
			case 'placeholder':
				$this->arrAttributes['placeholder'] = $varValue;
				break;
			default:
				parent::__set($strKey, $varValue);
				break;
		}
	}

	public function generate(): string {
		return \sprintf(
			'<input type="number" name="%s" id="ctrl_%s" class="tl_number_widget%s" value="%s" %s>',
			$this->name,
			$this->id,
			$this->class ? ' '.$this->class : '',
			StringUtil::specialchars($this->value),
			$this->getAttributes()
		);
	}
}
