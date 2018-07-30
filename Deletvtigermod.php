<?php

include_once 'vtlib/Vtiger/Module.php';

$Vtiger_Utils_Log = true;

$module = Vtiger_Module::getInstance('<ModuleName>');
if ($module) $module->delete();

/*

Step 2: Delete Folders
Module folders and files needs to be removed manually. Following are the location where its references exists.

modules/ModuleName
languages/en_us/ModuleName.php
languages/.../ModuleName.php
layouts/vlayout/modules/ModuleName
cron/ModuleName

*/
