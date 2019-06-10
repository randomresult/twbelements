<?php
/**
 * twbelements Content Element | twbelements_textimage
 */

/***************
 * Register fields
 */
$twbelements_textimage_fields = [
    'imageposition' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:twbelements/Resources/Private/Language/locallang.xlf:twbelements_textimage_dropdown.title',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'LLL:EXT:twbelements/Resources/Private/Language/locallang.xlf:twbelements_textimage_dropdown.option1',
                    'top'
                ],
                [
                    'LLL:EXT:twbelements/Resources/Private/Language/locallang.xlf:twbelements_textimage_dropdown.option2',
                    'bottom'
                ],
                [
                    'LLL:EXT:twbelements/Resources/Private/Language/locallang.xlf:twbelements_textimage_dropdown.option3',
                    'right'
                ],
                [
                    'LLL:EXT:twbelements/Resources/Private/Language/locallang.xlf:twbelements_textimage_dropdown.option4',
                    'left'
                ],
            ]
        ],
    ],
];

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $twbelements_textimage_fields);

/***************
 * Add Content Element: twbelements_textimage
 */
if (!is_array($GLOBALS['TCA']['tt_content']['types']['twbelements_textimage'])) {
    $GLOBALS['TCA']['tt_content']['types']['twbelements_textimage'] = [];
}

/***************
 * Add content element to seletor list
 */
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Text with Image',
        'twbelements_textimage',
        'EXT:twbelements/ext_icon.png'
    ],
    '--div--',
    'after'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['twbelements_textimage'] = 'default-icon';

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['twbelements_textimage']['showitem'] = $GLOBALS['TCA']['tt_content']['types']['header']['showitem'];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'imageposition,assets,bodytext',
    'twbelements_textimage',
    'after:header'
);

$GLOBALS['TCA']['tt_content']['types']['twbelements_textimage']['columnsOverrides'] = [
    'bodytext' => [
        'config' => [
            'enableRichtext' => true,
            'richtextConfiguration' => 'default'
        ],
    ],
    'assets' => [
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
            'assets',
            [
                'collapseAll' => 1,
                'maxitems' => 1,
            ]
        ),
    ],
];

$GLOBALS['TCA']['tt_content']['types']['twbelements_textimage']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config'] = [
    'cropVariants' => [
        'default' => [
            'title' => 'Desktop',
            'allowedAspectRatios' => [
                'NaN' => [
                    'title' => 'Free',
                    'value' => 0.0
                ],
                '3:2' => [
                    'title' => '3:2',
                    'value' => 3 / 2
                ],
                '1:1' => [
                    'title' => '1:1',
                    'value' => 1 / 1
                ],
                'person' => [
                    'title' => 'Portrait',
                    'value' => 0.6666
                ],
            ],
            'selectedRatio' => 'NaN',
        ],
        'tablet' => [
            'title' => 'Tablet',
            'allowedAspectRatios' => [
                'NaN' => [
                    'title' => 'Free',
                    'value' => 0.0
                ],
                '3:2' => [
                    'title' => '3:2',
                    'value' => 3 / 2
                ],
                '1:1' => [
                    'title' => '1:1',
                    'value' => 1 / 1
                ],
                'person' => [
                    'title' => 'Portrait',
                    'value' => 0.6666
                ],
            ],
            'selectedRatio' => 'NaN',
        ],
        'mobile' => [
            'title' => 'Mobile',
            'allowedAspectRatios' => [
                'NaN' => [
                    'title' => 'Free',
                    'value' => 0.0
                ],
                '3:2' => [
                    'title' => '3:2',
                    'value' => 3 / 2
                ],
                '1:1' => [
                    'title' => '1:1',
                    'value' => 1 / 1
                ],
                'person' => [
                    'title' => 'Portrait',
                    'value' => 0.6666
                ],
            ],
            'selectedRatio' => 'NaN',
        ],
    ]
];
