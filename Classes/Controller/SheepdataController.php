<?php
namespace RedSeadog\Rssheep\Controller;


/***
 *
 * This file is part of the "rssheep" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Ronald Wopereis <woepwoep@gmail.com>, Red-Seadog
 *
 ***/
/**
 * SheepdataController
 */
class SheepdataController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * sheepdataRepository
     * 
     * @var \RedSeadog\Rssheep\Domain\Repository\SheepdataRepository
     * @inject
     */
    protected $sheepdataRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $sheepdatas = $this->sheepdataRepository->findAll();
        $this->view->assign('sheepdatas', $sheepdatas);
    }

    /**
     * action show
     * 
     * @param \RedSeadog\Rssheep\Domain\Model\Sheepdata $sheepdata
     * @return void
     */
    public function showAction(\RedSeadog\Rssheep\Domain\Model\Sheepdata $sheepdata)
    {
        $this->view->assign('sheepdata', $sheepdata);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \RedSeadog\Rssheep\Domain\Model\Sheepdata $newSheepdata
     * @return void
     */
    public function createAction(\RedSeadog\Rssheep\Domain\Model\Sheepdata $newSheepdata)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->sheepdataRepository->add($newSheepdata);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \RedSeadog\Rssheep\Domain\Model\Sheepdata $sheepdata
     * @ignorevalidation $sheepdata
     * @return void
     */
    public function editAction(\RedSeadog\Rssheep\Domain\Model\Sheepdata $sheepdata)
    {
        $this->view->assign('sheepdata', $sheepdata);
    }

    /**
     * action update
     * 
     * @param \RedSeadog\Rssheep\Domain\Model\Sheepdata $sheepdata
     * @return void
     */
    public function updateAction(\RedSeadog\Rssheep\Domain\Model\Sheepdata $sheepdata)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->sheepdataRepository->update($sheepdata);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \RedSeadog\Rssheep\Domain\Model\Sheepdata $sheepdata
     * @return void
     */
    public function deleteAction(\RedSeadog\Rssheep\Domain\Model\Sheepdata $sheepdata)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->sheepdataRepository->remove($sheepdata);
        $this->redirect('list');
    }
}
