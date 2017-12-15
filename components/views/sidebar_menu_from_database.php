<?php
/**
 * @var $this SidebarMenuFromDatabase
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 */
?>

<li class="header"><?php echo Yii::t('phrase', 'MAIN NAVIGATION');?></li>
<?php echo $this->generateMenu($menus, $setting->site_type);?>