<?php

/*
 * This file is part of the package ku_prototype.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');

call_user_func(static function () {

// Container extension - rename Content Element Wizard label - also check TCEMAIN
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['itemGroups']['container'] = 'LLL:EXT:ku_prototype/Resources/Private/Language/locallang_be.xlf:container-grid';
});
