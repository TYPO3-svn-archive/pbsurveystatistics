<?php
/***************************************************************
*  Copyright notice
*  
*  (c) 2005 Patrick Broens (patrick@patrickbroens.nl)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is 
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
* 
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

$LANG->includeLLFile('EXT:pbsurveystatistics/lang/locallang_modfunc1.xml');
require_once (PATH_t3lib.'class.t3lib_extobjbase.php');
$BE_USER->modAccess($MCONF,1);

/**
 * Backend Module Function 'Statistics' for the 'pbsurvey' extension.
 * The idea of this module is to be a host module for wizard applications of the pbsurveystatistics extension.
 *
 * @author Patrick Broens <patrick@patrickbroens.nl>
 * @package TYPO3
 * @subpackage pbsurveystatistics
 */
class tx_pbsurveystatistics_modfunc1 extends t3lib_extobjbase {
	var $function_key = 'wiz';

	/**
	 * Initialize.
	 * Calls parent init function and then the handleExternalFunctionValue() function from the parent class
	 *
	 * @param	object		A reference to the parent (calling) object (which is probably an instance of an extension class to t3lib_SCbase)
	 * @param	array		The configuration set for this module - from global array TBE_MODULES_EXT
	 * @return	void
	 */
	function init(&$pObj,$conf)	{
		parent::init($pObj,$conf);
		$this->handleExternalFunctionValue();
	}

	/**
	 * Modifies parent objects internal MOD_MENU array, adding items this module needs.
	 *
	 * @return	array		Items merged with the parent objects.
	 */
	function modMenu()	{
		global $LANG;
		$arrModMenuAdd = array(
			$this->function_key => array()
		);
		$arrModMenuAdd[$this->function_key] = $this->pObj->mergeExternalItems($this->pObj->MCONF['name'],$this->function_key,$arrModMenuAdd[$this->function_key]);
		$arrModMenuAdd[$this->function_key] = t3lib_BEfunc::unsetMenuItems($this->pObj->modTSconfig['properties'],$arrModMenuAdd[$this->function_key],'menu.'.$this->function_key);

		return $arrModMenuAdd;
	}

	/**
	 * Creation of the main content. Calling extObjContent() to trigger content generation from the sub-sub modules
	 *
	 * @return	string		The content
	 */
	function main()	{
		$strOutput = $this->sectionWizardMenu();
		$strOutput .= $this->pObj->objDoc->spacer(5);
		$strOutput .= $this->extObjContent();
		return $strOutput;
	}
	
	/**
	 * Creation of the wizard menu
	 *
	 * @return	string		The menu
	 */
	function sectionWizardMenu() {
		global $LANG;
		$strMenu = $LANG->getLL('wizard').': '.t3lib_BEfunc::getFuncMenu($this->pObj->id,'SET[wiz]',$this->pObj->MOD_SETTINGS['wiz'],$this->pObj->MOD_MENU['wiz']);
		$strOutput = $this->pObj->objDoc->section('','<span class="nobr">'.$strMenu.'</span>');
		return $strOutput;
	}
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/pbsurveystatistics/modfunc1/class.tx_pbsurveystatistics_modfunc1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/pbsurveystatistics/modfunc1/class.tx_pbsurveystatistics_modfunc1.php']);
}
?>