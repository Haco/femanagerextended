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
	 * ecomToolboxCountry
	 *
	 * @var \Ecom\EcomToolbox\Domain\Model\Region
	 */
	protected $t3ecomtoolboxCountry = NULL;

	/**
	 * ecomToolboxState
	 *
	 * @var \Ecom\EcomToolbox\Domain\Model\State
	 */
	protected $t3ecomtoolboxState = NULL;

	/**
	 * privacyPolicy
	 *
	 * @var boolean
	 */
	protected $privacyPolicy = FALSE;

	/**
	 * @param string $username
	 * @param string $password
	 */
	public function __construct($username = '', $password = '') {
		parent::__construct($username, $password);
	}

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
	 * @return \SJBR\StaticInfoTables\Domain\Model\CountryZone
	 */
	public function getStaticCountryZone() {
		return $this->staticCountryZone;
	}

	/**
	 * @param \SJBR\StaticInfoTables\Domain\Model\CountryZone $staticCountryZone
	 */
	public function setStaticCountryZone(\SJBR\StaticInfoTables\Domain\Model\CountryZone $staticCountryZone = NULL) {
		$this->staticCountryZone = $staticCountryZone;
	}

	/**
	 * @return \Ecom\EcomToolbox\Domain\Model\Region
	 */
	public function getT3ecomtoolboxCountry() {
		return $this->t3ecomtoolboxCountry;
	}

	/**
	 * @param \Ecom\EcomToolbox\Domain\Model\Region $t3ecomtoolboxCountry
	 */
	public function setT3ecomtoolboxCountry(\Ecom\EcomToolbox\Domain\Model\Region $t3ecomtoolboxCountry = NULL) {
		$this->t3ecomtoolboxCountry = $t3ecomtoolboxCountry;
	}

	/**
	 * @return \Ecom\EcomToolbox\Domain\Model\State
	 */
	public function getT3ecomtoolboxState() {
		return $this->t3ecomtoolboxState;
	}

	/**
	 * @param \Ecom\EcomToolbox\Domain\Model\State $t3ecomtoolboxState
	 */
	public function setT3ecomtoolboxState(\Ecom\EcomToolbox\Domain\Model\State $t3ecomtoolboxState = NULL) {
		$this->t3ecomtoolboxState = $t3ecomtoolboxState;
	}

	/**
	 * @return boolean
	 */
	public function isPrivacyPolicy() {
		return $this->privacyPolicy;
	}

	/**
	 * @return boolean
	 */
	public function getPrivacyPolicy() {
		return $this->privacyPolicy;
	}

	/**
	 * @param boolean $privacyPolicy
	 */
	public function setPrivacyPolicy($privacyPolicy) {
		$this->privacyPolicy = $privacyPolicy;
	}

}
?>