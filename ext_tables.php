<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'RedSeadog.Rssheep',
            'Sheepdata',
            'sheepdata'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('rssheep', 'Configuration/TypoScript', 'rssheep');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_rssheep_domain_model_sheepdata', 'EXT:rssheep/Resources/Private/Language/locallang_csh_tx_rssheep_domain_model_sheepdata.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_rssheep_domain_model_sheepdata');

    }
);
