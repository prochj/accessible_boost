<?php

$THEME->name = 'accessible_boost';
$THEME->parents = ['boost'];
$THEME->sheets = [];
$THEME->editor_sheets = [];
$THEME->scss = function($theme) {
    return theme_accessible_boost_get_main_scss_content($theme);
};
$THEME->plugins_exclude_sheets = ['boost'];
$THEME->usefallback = true;
$THEME->haseditswitch = false;
$THEME->layouts = [
    'base' => array(
        'file' => 'columns2.php',
        'regions' => array(),
    ),
    'standard' => array(
        'file' => 'columns2.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    'course' => array(
        'file' => 'columns2.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    'incourse' => array(
        'file' => 'columns2.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    'admin' => array(
        'file' => 'columns2.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    'mydashboard' => array(
        'file' => 'columns2.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
];
$THEME->enable_dock = false;
$THEME->csspostprocess = null;
