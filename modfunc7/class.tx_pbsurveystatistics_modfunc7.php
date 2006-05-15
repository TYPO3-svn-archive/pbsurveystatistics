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

$LANG->includeLLFile('EXT:pbsurveystatistics/lang/locallang_modfunc7.xml');
require_once (PATH_t3lib.'class.t3lib_extobjbase.php');

/**
 * Backend Module Function 'Average Score Item' for the 'pbsurvey' extension.
 *
 * @author Patrick Broens <patrick@patrickbroens.nl>
 * @package TYPO3
 * @subpackage pbsurveyexport
 */
class tx_pbsurveystatistics_modfunc7 extends t3lib_extobjbase {
	 
	/**
	 * Main function of the module. 
	 *
	 * @return   string		HTML content for the function
	 */
	function main()	{
		global $LANG;
		$strOutput = $LANG->getLL('moduleFunction');
		return $strOutput;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/pbsurveystatistics/modfunc7/class.tx_pbsurveystatistics_modfunc7.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/pbsurveystatistics/modfunc7/class.tx_pbsurveystatistics_modfunc7.php']);
}
?>