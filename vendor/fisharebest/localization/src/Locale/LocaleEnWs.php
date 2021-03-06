<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryWs;

/**
 * Class LocaleEnWs
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnWs extends LocaleEn {
	public function territory() {
		return new TerritoryWs;
	}
}
