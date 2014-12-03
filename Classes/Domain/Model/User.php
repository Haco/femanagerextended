<?php
namespace In2\Femanagerextended\Domain\Model;

class User extends \In2\Femanager\Domain\Model\User {

	/**
	 * staticCountry
	 *
	 * @var \SJBR\StaticInfoTables\Domain\Model\Country
	 */
	protected $staticCountry = NULL;

	/**
	 * staticCountryZone
	 *
	 * @var \SJBR\StaticInfoTables\Domain\Model\CountryZone
	 */
	protected $staticCountryZone = NULL;

	/**
	 * privacyPolicy
	 *
	 * @var boolean
	 */
	protected $privacyPolicy = FALSE;

	/**
	 * @return \SJBR\StaticInfoTables\Domain\Model\Country
	 */
	public function getStaticCountry() {
		return $this->staticCountry;
	}

	/**
	 * @param \SJBR\StaticInfoTables\Domain\Model\Country $staticCountry
	 */
	public function setStaticCountry(\SJBR\StaticInfoTables\Domain\Model\Country $staticCountry = NULL) {
		$this->staticCountry = $staticCountry;
	}

	/**
	 * Returns the staticCountryZone
	 *
	 * @return \SJBR\StaticInfoTables\Domain\Model\CountryZone $staticCountryZone
	 */
	public function getStaticCountryZone() {
		return $this->staticCountryZone;
	}

	/**
	 * Sets the staticCountryZone
	 *
	 * @param \SJBR\StaticInfoTables\Domain\Model\CountryZone $staticCountryZone
	 *
*@return void
	 */
	public function setStaticCountryZone(\SJBR\StaticInfoTables\Domain\Model\CountryZone $staticCountryZone = NULL) {
		$this->staticCountryZone = $staticCountryZone;
	}

	/**
	 * Returns the privacyPolicy
	 *
	 * @return boolean
	 */
	public function isPrivacyPolicy() {
		return $this->privacyPolicy;
	}

	/**
	 * Sets the privacyPolicy
	 *
	 * @param boolean $privacyPolicy
	 */
	public function setPrivacyPolicy($privacyPolicy) {
		$this->privacyPolicy = $privacyPolicy;
	}


}
?>