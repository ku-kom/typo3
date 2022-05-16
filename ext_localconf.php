<?php

defined('TYPO3_MODE') || die();

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ku_prototype/Configuration/TsConfig/Page/All.tsconfig">');

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['ku_prototype'] = 'EXT:ku_prototype/Configuration/RTE/Default.yaml';

// KU sinmple editor
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['ku_simple'] = 'EXT:ku_prototype/Configuration/RTE/KU_simple.yaml';

// KU news editor
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['ku_news'] = 'EXT:ku_prototype/Configuration/RTE/KU_news.yaml';

// KU Viewhelper namespace
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['ku'] = ['UniversityOfCopenhagen\KuPrototype\ViewHelpers'];