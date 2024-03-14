<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
$custom_menu_array = array();
$custom_menu_array['DCL_CHANGE_MODULE_STATUS']['location'] = 'index.php?module=DiscountLine&action=DiscountLineConfig&formodule=DiscountLine';
$custom_menu_array['DCL_CHANGE_MODULE_STATUS']['image_src'] = 'toggle';
$custom_menu_array['DCL_CHANGE_MODULE_STATUS']['desc'] = getTranslatedString('STATUS_CONFIGURATION_DESCRIPTION', 'DiscountLine');
$custom_menu_array['DCL_CHANGE_MODULE_STATUS']['label'] = getTranslatedString('STATUS_CONFIGURATION', 'DiscountLine');
include 'modules/Vtiger/Settings.php';
?>
