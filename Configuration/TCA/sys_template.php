<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'twbelements',
    'Configuration/TypoScript',
    'twbelements'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'twbelements',
    'Configuration/PageTS/pagetsconfig.typoscript',
    'twbelements PageTSConfig'
);
