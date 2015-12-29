<?php
// Restrict access.
defined('_JEXEC') or die;
// Require helper.
require_once dirname(__FILE__) . '/helper.php';

// Fetch articles from database.
$articles = modNavSliderHelper::queryDatabase('#__content', 'title, images, alias', 'state = 1', 0, 'publish_up DESC');

// Fetch categories from database.
$categories = modNavSliderHelper::getCategories();

$tags = modNavSliderHelper::getTags();

// Load CSS & JS.
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'modules/'.$module->module . "/css/mod_navslider.css");
$document->addScript(JURI::base().'modules/'.$module->module . "/js/mod_navslider.js");

require JModuleHelper::getLayoutPath('mod_navslider');
?>