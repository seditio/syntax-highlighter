<?php
/**
 * Russian Language File for Syntax Highlighter plugin
 *
 * @package syntaxhighligther
 */

defined('COT_CODE') or die('Wrong URL.');

$L['info_desc'] = 'Client side code highlighter';

/**
 * Plugin Config
 */

$L['cfg_theme'] = 'Цветовая тема';
$L['cfg_theme_hint'] = 'Вы можете добавить свою тему в: ' . Cot::$cfg['themes_dir'] . '/' . Cot::$cfg['defaulttheme']
    . '/styles/syntaxhighlighter-имяТемы.css';
$L['cfg_autoLinks'] = 'Auto links';
$L['cfg_autoLinks_hint'] = '(По умолчанию да) - Позволяет включить/выключить обнаружение ссылок в элементе с кодом. '
    . 'Если отключено, URL-адреса не будут кликабельными';
$L['cfg_className'] = 'Класс элемента';
$L['cfg_className_hint'] = '(По умолчанию пусто) - Позволяет добавить дополнительный CSS класс (или несколько классов) к каждому элементу с кодом';
$L['cfg_gutter'] = 'Gutter';
$L['cfg_gutter_hint'] = '(По умолчанию да) - Позволяет включить/выключить столбец с нумерацией строк';
$L['cfg_smartTabs'] = 'Умная табуляция';
$L['cfg_smartTabs_hint'] = '(По умолчанию да) - Позволяет включить/выключить функцию умной табуляции';
$L['cfg_tabSize'] = 'Размер табуляции';
$L['cfg_tabSize_hint'] = '(По умолчанию 4) - Позволяет настроить размер табуляции';