<?php
defined('MOODLE_INTERNAL') || die();

use core\session\manager;

function theme_accessible_boost_get_page_theme(moodle_page $page) {
    global $USER, $COURSE;

    // Pokud nejsme v rámci kurzu, vrať výchozí téma
    if (!isset($COURSE->id) || $COURSE->id == SITEID) {
        return 'boost';
    }

    // Kontext kurzu
    $context = context_course::instance($COURSE->id);

    // ID role studenta = standardně 5, Manažer = 1, Tvůrce kurzu = 2, Učitel = 3 ...
    $studentroleid = 5;

    // Zkontrolujeme, zda má uživatel danou roli v tomto kurzu
    if (user_has_role_assignment($USER->id, $studentroleid, $context->id)) {
        return 'accessible_boost';
    }

    // Jinak použít výchozí téma
    return 'boost';
}
