<?php
namespace RedSeadog\Rssheep\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Ronald Wopereis <woepwoep@gmail.com>
 */
class SheepdataTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \RedSeadog\Rssheep\Domain\Model\Sheepdata
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RedSeadog\Rssheep\Domain\Model\Sheepdata();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLifeNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLifeNumber()
        );
    }

    /**
     * @test
     */
    public function setLifeNumberForStringSetsLifeNumber()
    {
        $this->subject->setLifeNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lifeNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGenderReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getGender()
        );
    }

    /**
     * @test
     */
    public function setGenderForIntSetsGender()
    {
        $this->subject->setGender(12);

        self::assertAttributeEquals(
            12,
            'gender',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBirthDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getBirthDate()
        );
    }

    /**
     * @test
     */
    public function setBirthDateForDateTimeSetsBirthDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setBirthDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'birthDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getScrapieStatusReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getScrapieStatus()
        );
    }

    /**
     * @test
     */
    public function setScrapieStatusForIntSetsScrapieStatus()
    {
        $this->subject->setScrapieStatus(12);

        self::assertAttributeEquals(
            12,
            'scrapieStatus',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLifeNumberMotherReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLifeNumberMother()
        );
    }

    /**
     * @test
     */
    public function setLifeNumberMotherForStringSetsLifeNumberMother()
    {
        $this->subject->setLifeNumberMother('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lifeNumberMother',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLifeNumberFatherReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLifeNumberFather()
        );
    }

    /**
     * @test
     */
    public function setLifeNumberFatherForStringSetsLifeNumberFather()
    {
        $this->subject->setLifeNumberFather('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lifeNumberFather',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRemarkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRemark()
        );
    }

    /**
     * @test
     */
    public function setRemarkForStringSetsRemark()
    {
        $this->subject->setRemark('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'remark',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRegistrantReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getRegistrant()
        );
    }

    /**
     * @test
     */
    public function setRegistrantForIntSetsRegistrant()
    {
        $this->subject->setRegistrant(12);

        self::assertAttributeEquals(
            12,
            'registrant',
            $this->subject
        );
    }
}
