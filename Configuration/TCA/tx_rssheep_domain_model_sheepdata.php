<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata',
        'label' => 'life_number',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'life_number,life_number_mother,life_number_father,remark',
        'iconfile' => 'EXT:rssheep/Resources/Public/Icons/tx_rssheep_domain_model_sheepdata.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, life_number, gender, birth_date, scrapie_status, life_number_mother, life_number_father, remark, registrant',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, life_number, gender, birth_date, scrapie_status, life_number_mother, life_number_father, remark, registrant, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_rssheep_domain_model_sheepdata',
                'foreign_table_where' => 'AND {#tx_rssheep_domain_model_sheepdata}.{#pid}=###CURRENT_PID### AND {#tx_rssheep_domain_model_sheepdata}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'life_number' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.life_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'gender' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.gender',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [ 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.gender.female', 'V' ],
                    [ 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.gender.male', 'M' ],
                    [ 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.gender.castrato', 'C' ],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => 'required'
            ],
        ],
        'birth_date' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.birth_date',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date',
                'default' => null,
            ],
        ],
        'scrapie_status' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.scrapie_status',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [ 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.scrapie.blank', '' ],
                    [ 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.scrapie.arr', 'ARR/ARR' ],
                    [ 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.scrapie.arh', 'ARR/ARH' ],
                    [ 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.scrapie.arq', 'ARR/ARQ' ],
                    [ 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.scrapie.vrq', 'ARR/VRQ' ],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'life_number_mother' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.life_number_mother',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'life_number_father' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.life_number_father',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'remark' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.remark',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'registrant' => [
            'exclude' => false,
            'label' => 'LLL:EXT:rssheep/Resources/Private/Language/locallang_db.xlf:tx_rssheep_domain_model_sheepdata.registrant',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
    
    ],
];
