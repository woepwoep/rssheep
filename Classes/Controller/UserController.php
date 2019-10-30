<?php
namespace RedSeadog\Rssheep\Controller;

/**
 * UserController
 */

class UserController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
     * userRepository
     *
     * @var \RedSeadog\Rssheep\Domain\Repository\UserRepository
     * @inject
     */
    protected $userRepository = NULL;
}
