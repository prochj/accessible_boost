<?php
defined('MOODLE_INTERNAL') || die();

use core\session\manager;

function theme_accessible_boost_get_page_theme(moodle_page $page) {
    global $USER, $COURSE;
echo 'theme_accessible_boost_get_page_theme id='.$USER->id;
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

/**
 * Returns the main SCSS content for the theme.
 *
 * @param theme_config $theme
 * @return string
 */
function theme_accessible_boost_get_main_scss_content($theme) {
    global $CFG;
echo 'THEME lib.php';
    $pre = file_exists(__DIR__ . '/scss/pre.scss') ? file_get_contents(__DIR__ . '/scss/pre.scss') : 'hovno pre';
    $main = file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
    $post = file_exists(__DIR__ . '/scss/post.scss') ? file_get_contents(__DIR__ . '/scss/post.scss') : 'hovno post';

    return $pre . "\n" . $main . "\n" . $post;
}
