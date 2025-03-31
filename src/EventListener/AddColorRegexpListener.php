<?php
namespace Lukasbableck\ContaoMoreBackendWidgetsBundle\EventListener;

use Contao\CoreBundle\DependencyInjection\Attribute\AsHook;
use Contao\Widget;

#[AsHook('addCustomRegexp')]
class AddColorRegexpListener {
	public function __invoke(string $regexp, $input, Widget $widget): bool {
		if ('colorHexRGB' === $regexp) {
			$exp = '^#[A-Fa-f0-9]{3,6}$';

			if (!preg_match('/'.$exp.'/', $input)) {
				$widget->addError('Enter a valid color.');
			}

			return true;
		}

		if ('colorHexRGBA' === $regexp) {
			$exp = '^#[A-Fa-f0-9]{4,8}$';

			if (!preg_match('/'.$exp.'/', $input)) {
				$widget->addError('Enter a valid color.');
			}

			return true;
		}

		if ('colorHex' === $regexp) {
			$exp = '^#[A-Fa-f0-9]{3,4,6,8}$';

			if (!preg_match('/'.$exp.'/', $input)) {
				$widget->addError('Enter a valid color.');
			}

			return true;
		}

		if ('color' === $regexp) {
			$exp = '^[A-Fa-f0-9]{6}$';

			if (!preg_match('/'.$exp.'/', $input)) {
				$widget->addError('Enter a valid color.');
			}

			return true;
		}

		return false;
	}
}
