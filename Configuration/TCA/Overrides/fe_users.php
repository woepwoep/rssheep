<?php
defined('TYPO3_MODE') or die();

// Add some fields to FE Users table to show TCA fields definitions
// USAGE: TCA Reference > $GLOBALS['TCA'] array reference > ['columns'][fieldname]['config'] / TYPE: "select"
$temporaryColumns = [
        'ubn' => [
                'exclude' => 0,
                'label' => 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:fe_users.ubn',
                'config' => [
                        'type' => 'input',
                        'size' => '7',
                        'max' => '7',
                        'eval' => 'int',
                        'default' => '0',
                ],
        ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'fe_users',
        $temporaryColumns
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'fe_users',
        'ubn'
);
