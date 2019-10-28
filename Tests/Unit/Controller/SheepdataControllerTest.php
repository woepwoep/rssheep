<?php
namespace RedSeadog\Rssheep\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Ronald Wopereis <woepwoep@gmail.com>
 */
class SheepdataControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RedSeadog\Rssheep\Controller\SheepdataController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\RedSeadog\Rssheep\Controller\SheepdataController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllSheepdatasFromRepositoryAndAssignsThemToView()
    {

        $allSheepdatas = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $sheepdataRepository = $this->getMockBuilder(\RedSeadog\Rssheep\Domain\Repository\SheepdataRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $sheepdataRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSheepdatas));
        $this->inject($this->subject, 'sheepdataRepository', $sheepdataRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('sheepdatas', $allSheepdatas);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSheepdataToView()
    {
        $sheepdata = new \RedSeadog\Rssheep\Domain\Model\Sheepdata();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('sheepdata', $sheepdata);

        $this->subject->showAction($sheepdata);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenSheepdataToSheepdataRepository()
    {
        $sheepdata = new \RedSeadog\Rssheep\Domain\Model\Sheepdata();

        $sheepdataRepository = $this->getMockBuilder(\RedSeadog\Rssheep\Domain\Repository\SheepdataRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $sheepdataRepository->expects(self::once())->method('add')->with($sheepdata);
        $this->inject($this->subject, 'sheepdataRepository', $sheepdataRepository);

        $this->subject->createAction($sheepdata);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenSheepdataToView()
    {
        $sheepdata = new \RedSeadog\Rssheep\Domain\Model\Sheepdata();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('sheepdata', $sheepdata);

        $this->subject->editAction($sheepdata);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenSheepdataInSheepdataRepository()
    {
        $sheepdata = new \RedSeadog\Rssheep\Domain\Model\Sheepdata();

        $sheepdataRepository = $this->getMockBuilder(\RedSeadog\Rssheep\Domain\Repository\SheepdataRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $sheepdataRepository->expects(self::once())->method('update')->with($sheepdata);
        $this->inject($this->subject, 'sheepdataRepository', $sheepdataRepository);

        $this->subject->updateAction($sheepdata);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenSheepdataFromSheepdataRepository()
    {
        $sheepdata = new \RedSeadog\Rssheep\Domain\Model\Sheepdata();

        $sheepdataRepository = $this->getMockBuilder(\RedSeadog\Rssheep\Domain\Repository\SheepdataRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $sheepdataRepository->expects(self::once())->method('remove')->with($sheepdata);
        $this->inject($this->subject, 'sheepdataRepository', $sheepdataRepository);

        $this->subject->deleteAction($sheepdata);
    }
}
