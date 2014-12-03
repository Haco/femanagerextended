<?php
namespace In2\Femanager\ViewHelpers\Form;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Alex Kellner <alexander.kellner@in2code.de>, in2code
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Get Countries from static_info_tables
 *
 * Class GetCountriesFromStaticInfoTablesViewHelper
 */
class GetCountryZonessFromStaticInfoTablesViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * countryRepository
	 *
	 * @var \SJBR\StaticInfoTables\Domain\Repository\CountryZoneRepository
	 * @inject
	 */
	protected $countryZoneRepository;

	/**
	 * Build an country array
	 *
	 * @param \string $key
	 * @param \string $value
	 * @param \string $sortbyField
	 * @param \string $sorting
	 * @return \array
	 */
	public function render($key = 'uid', $value = 'localName', $sortbyField = 'localName', $sorting = 'asc') {
		$countryZones = $this->countryZoneRepository->findAllOrderedBy($sortbyField, $sorting);
		$countryZonesArray = array();
		/** @var \SJBR\StaticInfoTables\Domain\Model\CountryZone $countryZone */
		foreach ($countryZones as $countryZone) {
			if (
				method_exists($countryZone, 'get' . ucfirst($key)) &&
				method_exists($countryZone, 'get' . ucfirst($value))
			) {
				$countryZonesArray[$countryZone->{'get' . ucfirst($key)}()] = $countryZone->{'get' . ucfirst($value)}();
			} else {
				$countryZonesArray[$countryZone->getUid()] = $countryZone->getNameEn();
			}
		}
		return $countryZonesArray;
	}
}