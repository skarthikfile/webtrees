<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVi;

/**
 * Class LocaleEnVi
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnVi extends LocaleEn {
	public function territory() {
		return new TerritoryVi;
	}
}
