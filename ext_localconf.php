<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RedSeadog.Rssheep',
            'Sheepdata',
            [
                'Sheepdata' => 'list, new, create, update, delete'
            ],
            // non-cacheable actions
            [
                'Sheepdata' => 'list, new, create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    sheepdata {
                        iconIdentifier = rssheep-plugin-sheepdata
                        title = LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_sheepdata.name
                        description = LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_sheepdata.description
                        tt_content_defValues {
                            CType = list
                            list_type = rssheep_sheepdata
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'rssheep-plugin-sheepdata',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:rssheep/Resources/Public/Icons/user_plugin_sheepdata.svg']
			);
		
    }
);
