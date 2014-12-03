<?php
namespace In2\Femanagerextended\Controller;

class NewController extends \In2\Femanager\Controller\NewController {

	/**
	 * Init for User creation
	 *
	 * @return void
	 */
	public function initializeCreateAction() {
		parent::initializeCreateAction();
		$propertyMappingConfiguration = $this->arguments['user']->getPropertyMappingConfiguration();
		$propertyMappingConfiguration->allowProperties('staticCountryZone');
	}

	/**
	 * action create
	 *
	 * @param \In2\Femanagerextended\Domain\Model\User $user
	 * @validate $user In2\Femanager\Domain\Validator\ServersideValidator
	 * @validate $user In2\Femanager\Domain\Validator\PasswordValidator
	 * @return void
	 */
	public function createAction(\In2\Femanagerextended\Domain\Model\User $user) {
		parent::createAction($user);
	}
}
?>