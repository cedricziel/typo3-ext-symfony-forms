<?php

/***************
 * Plugin
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'symfony_forms',
    'Form',
    'Symfony Forms Example'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'symfony_forms',
    'Configuration/TypoScript',
    'Symfony Forms'
);
