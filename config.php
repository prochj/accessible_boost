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
$THEME->layouts = [
    'standard' => [
        'file' => 'columns2.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
    ],
    'course' => [
        'file' => 'columns2.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
    ],
];
$THEME->enable_dock = false;
$THEME->csspostprocess = null;
