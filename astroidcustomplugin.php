<?php

/**
 * @package   Astroid Framework
 * @author    JoomDev https://www.joomdev.com
 * @copyright Copyright (C) 2009 - 2019 JoomDev.
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */
defined('_JEXEC') or die;

/**
 * Your Astroid Plugin
 *
 * @since  1.0
 */
class plgSystemAstroidCustomPlugin extends JPlugin {

   protected $app;

   // Astroid Admin Events
   public function onBeforeAstroidAdminRender(&$template) {
	  $stylesheeturl = juri::root().'plugins/system/astroidcustomplugin/assets/styles.css';
      AstroidFramework::addStyleSheet($stylesheeturl); // to add css link
	  $styles='
	  /* coming through the plugin */
	  #save-options.astroid-sidebar-btn.align-items-center.text-white {
		  background: orange !important;
	  }
	  #clear-cache{
		  background: red !important;
		  color:white;
	  }
	  ';
      AstroidFramework::addStyleDeclaration($styles); // to add css script
	  /* script.js is blank, you can add anything you like */
	  $script = juri::root().'plugins/system/astroidcustomplugin/assets/script.js';
      AstroidFramework::addScript($script); // to add js file in head
	  
	  $script_body = juri::root().'plugins/system/astroidcustomplugin/assets/script_body.js';
      AstroidFramework::addScript($script_body, "body"); // to add js file in body
	  
	  $js_body = '// Some jd for body goes here';
      AstroidFramework::addScriptDeclaration($js_body); // to add js script in body
	  
      $js = 'alert("I am the custom JS Alert coming from plugin\'s php file");';
      AstroidFramework::addScriptDeclaration($js, "body"); // to add js script in head
   }

   // Astroid Template Events
}
