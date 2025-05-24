<?php
defined('MOODLE_INTERNAL') || die();
$hasblocks = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
$bodyclasses = [];
if ($hasblocks) {
    $bodyclasses[] = 'has-blocks';
}
?>
<?php echo $OUTPUT->doctype() ?>
<html <?= $OUTPUT->htmlattributes() ?>>
<head>
    <title><?= $OUTPUT->page_title() ?></title>
    <?= $OUTPUT->standard_head_html() ?>   
</head>
<body <?= $OUTPUT->body_attributes($bodyclasses) ?>>
    <?= $OUTPUT->standard_top_of_body_html() ?>

    <header class="header">
              <div class="container">
            <?= $OUTPUT->context_header() ?>
            <?= $OUTPUT->login_info() ?>
        </div>
    </header>

    <div id="page" class="container">
        <main id="region-main" class="maincontent" role="main">
            <h1>region-main</h1>
            <?= $OUTPUT->main_content() ?>
        </main>

        <?php if ($hasblocks): ?>
        <aside id="region-pre" class="block-region" role="complementary" aria-label="<?= get_string('blocks') ?>">
            <?= $OUTPUT->blocks('side-pre') ?>
        </aside>
        <?php endif; ?>
    </div>

    <footer id="page-footer">
        <h1>page-footer</h1>
        <?= $OUTPUT->standard_footer_html() ?>
    </footer>

    <?= $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>
