<?php
namespace RedSeadog\Rssheep\Domain\Model;

class User extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser {

    /**
     * ubn
     *
     * @var \string
     */
    protected $ubn;
        
        
        
    /**
     * Returns the ubn
     *
     * @return \string $ubn
     */
    public function getUbn() {
        return $this->ubn;
    }

    /**
     * Sets the ubn
     *
     * @param \string $ubn
     * @return void
     */
    public function setUbn($ubn) {
        $this->ubn = $ubn;
    }
}
