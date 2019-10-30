<?php
namespace VENDOR\Extname\Controller;

/**
 * UserController
 */

class UserController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
     * userRepository
     *
     * @var \VENDOR\Extname\Domain\Repository\UserRepository
     * @inject
     */
    protected $userRepository = NULL;
}
