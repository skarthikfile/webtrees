<?php
/**
 * webtrees: online genealogy
 * Copyright (C) 2017 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace Fisharebest\Webtrees\Module;

use Fisharebest\Webtrees\Auth;
use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Menu;

/**
 * Class BirthDeathMarriageReportModule
 */
class BirthDeathMarriageReportModule extends AbstractModule implements ModuleReportInterface {
	/**
	 * How should this module be labelled on tabs, menus, etc.?
	 *
	 * @return string
	 */
	public function getTitle() {
		// This text also appears in the .XML file - update both together
		return /* I18N: Name of a module/report. “Vital records” are life events - birth/marriage/death */ I18N::translate('Vital records');
	}

	/**
	 * A sentence describing what this module does.
	 *
	 * @return string
	 */
	public function getDescription() {
		// This text also appears in the .XML file - update both together
		return /* I18N: Description of the “Vital records” module. “Vital records” are life events - birth/marriage/death */ I18N::translate('A report of vital records for a given date or place.');
	}

	/**
	 * What is the default access level for this module?
	 *
	 * Some modules are aimed at admins or managers, and are not generally shown to users.
	 *
	 * @return int
	 */
	public function defaultAccessLevel() {
		return Auth::PRIV_PRIVATE;
	}

	/**
	 * Return a menu item for this report.
	 *
	 * @return Menu
	 */
	public function getReportMenu() {
		global $WT_TREE;

		return new Menu(
			$this->getTitle(),
			'reportengine.php?ged=' . $WT_TREE->getNameUrl() . '&amp;action=setup&amp;report=' . WT_MODULES_DIR . $this->getName() . '/report.xml',
			'menu-report-' . $this->getName(),
			['rel' => 'nofollow']
		);
	}
}
