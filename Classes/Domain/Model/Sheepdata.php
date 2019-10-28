<?php
namespace RedSeadog\Rssheep\Domain\Model;


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
 * Sheepdata
 */
class Sheepdata extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Life number of this animal.
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $lifeNumber = '';

    /**
     * Gender of this animal. Choices are V,M and C.
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $gender = 0;

    /**
     * Birth date of this animal
     * 
     * @var \DateTime
     */
    protected $birthDate = null;

    /**
     * Scrapie status (= health status). Choices are ARR/ARR, ARR/ARH, ARR/ARQ and
     * ARR/VRQ
     * 
     * @var int
     */
    protected $scrapieStatus = 0;

    /**
     * Life number of this animal's mother.
     * 
     * @var string
     */
    protected $lifeNumberMother = '';

    /**
     * Life number of this animal's father
     * 
     * @var string
     */
    protected $lifeNumberFather = '';

    /**
     * Optional remarks about this animal.
     * 
     * @var string
     */
    protected $remark = '';

    /**
     * uid of the loggedin user (fe_user)
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $registrant = 0;

    /**
     * Returns the lifeNumber
     * 
     * @return string $lifeNumber
     */
    public function getLifeNumber()
    {
        return $this->lifeNumber;
    }

    /**
     * Sets the lifeNumber
     * 
     * @param string $lifeNumber
     * @return void
     */
    public function setLifeNumber($lifeNumber)
    {
        $this->lifeNumber = $lifeNumber;
    }

    /**
     * Returns the gender
     * 
     * @return int $gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets the gender
     * 
     * @param int $gender
     * @return void
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Returns the birthDate
     * 
     * @return \DateTime $birthDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets the birthDate
     * 
     * @param \DateTime $birthDate
     * @return void
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * Returns the scrapieStatus
     * 
     * @return int $scrapieStatus
     */
    public function getScrapieStatus()
    {
        return $this->scrapieStatus;
    }

    /**
     * Sets the scrapieStatus
     * 
     * @param int $scrapieStatus
     * @return void
     */
    public function setScrapieStatus($scrapieStatus)
    {
        $this->scrapieStatus = $scrapieStatus;
    }

    /**
     * Returns the lifeNumberMother
     * 
     * @return string $lifeNumberMother
     */
    public function getLifeNumberMother()
    {
        return $this->lifeNumberMother;
    }

    /**
     * Sets the lifeNumberMother
     * 
     * @param string $lifeNumberMother
     * @return void
     */
    public function setLifeNumberMother($lifeNumberMother)
    {
        $this->lifeNumberMother = $lifeNumberMother;
    }

    /**
     * Returns the lifeNumberFather
     * 
     * @return string $lifeNumberFather
     */
    public function getLifeNumberFather()
    {
        return $this->lifeNumberFather;
    }

    /**
     * Sets the lifeNumberFather
     * 
     * @param string $lifeNumberFather
     * @return void
     */
    public function setLifeNumberFather($lifeNumberFather)
    {
        $this->lifeNumberFather = $lifeNumberFather;
    }

    /**
     * Returns the remark
     * 
     * @return string $remark
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets the remark
     * 
     * @param string $remark
     * @return void
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
    }

    /**
     * Returns the registrant
     * 
     * @return int $registrant
     */
    public function getRegistrant()
    {
        return $this->registrant;
    }

    /**
     * Sets the registrant
     * 
     * @param int $registrant
     * @return void
     */
    public function setRegistrant($registrant)
    {
        $this->registrant = $registrant;
    }
}
