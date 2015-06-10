<?php
namespace In2\Femanagerextended\Domain\Model;

class User extends \In2\Femanager\Domain\Model\User {

	/**
	 * ecomToolboxCountry
	 *
	 * @var \Ecom\EcomToolbox\Domain\Model\Region
	 */
	protected $ecomToolboxCountry = NULL;

	/**
	 * ecomToolboxState
	 *
	 * @var \Ecom\EcomToolbox\Domain\Model\State
	 */
	protected $ecomToolboxState = NULL;

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
	 * @return \Ecom\EcomToolbox\Domain\Model\Region
	 */
	public function getEcomToolboxCountry() {
		return $this->ecomToolboxCountry;
	}

	/**
	 * @param \Ecom\EcomToolbox\Domain\Model\Region $ecomToolboxCountry
	 */
	public function setEcomToolboxCountry(\Ecom\EcomToolbox\Domain\Model\Region $ecomToolboxCountry = NULL) {
		$this->ecomToolboxCountry = $ecomToolboxCountry;
	}

	/**
	 * @return \Ecom\EcomToolbox\Domain\Model\State
	 */
	public function getEcomToolboxState() {
		return $this->ecomToolboxState;
	}

	/**
	 * @param \Ecom\EcomToolbox\Domain\Model\State $ecomToolboxState
	 */
	public function setEcomToolboxState(\Ecom\EcomToolbox\Domain\Model\State $ecomToolboxState = NULL) {
		$this->ecomToolboxState = $ecomToolboxState;
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