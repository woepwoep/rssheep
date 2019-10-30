<?php
namespace VENDOR\Extname\Domain\Model;

class User extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser {

    /**
     * mobile
     *
     * @var \string
     */
    protected $mobile;
        
        
        
    /**
     * Returns the mobile
     *
     * @return \string $mobile
     */
    public function getMobile() {
        return $this->mobile;
    }

    /**
     * Sets the mobile
     *
     * @param \string $mobile
     * @return void
     */
    public function setMobile($mobile) {
        $this->mobile = $mobile;
    }
}
