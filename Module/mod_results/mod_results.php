<?php
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use ResultsNamespace\Module\Results\Site\Helper\ResultsHelper;

$property_lists  = ResultsHelper::getResults();

require ModuleHelper::getLayoutPath('mod_results', $params->get('layout', 'default'));
