<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

if (TYPO3_MODE=='BE')	{
	t3lib_extMgm::insertModuleFunction(
		'web_txpbsurveyM1',
		'tx_pbsurveystatistics_modfunc1',
		t3lib_extMgm::extPath($_EXTKEY).'modfunc1/class.tx_pbsurveystatistics_modfunc1.php',
		'LLL:EXT:pbsurveystatistics/lang/locallang_modfunc1.xml:moduleFunction'
	);
	t3lib_extMgm::insertModuleFunction(
		'web_txpbsurveyM1',
		'tx_pbsurveystatistics_modfunc2',
		t3lib_extMgm::extPath($_EXTKEY).'modfunc2/class.tx_pbsurveystatistics_modfunc2.php',
		'LLL:EXT:pbsurveystatistics/lang/locallang_modfunc2.xml:moduleFunction'
		,'wiz'
	);
	t3lib_extMgm::insertModuleFunction(
		'web_txpbsurveyM1',
		'tx_pbsurveystatistics_modfunc3',
		t3lib_extMgm::extPath($_EXTKEY).'modfunc3/class.tx_pbsurveystatistics_modfunc3.php',
		'LLL:EXT:pbsurveystatistics/lang/locallang_modfunc3.xml:moduleFunction'
		,'wiz'
	);
	t3lib_extMgm::insertModuleFunction(
		'web_txpbsurveyM1',
		'tx_pbsurveystatistics_modfunc4',
		t3lib_extMgm::extPath($_EXTKEY).'modfunc4/class.tx_pbsurveystatistics_modfunc4.php',
		'LLL:EXT:pbsurveystatistics/lang/locallang_modfunc4.xml:moduleFunction'
		,'wiz'
	);
	t3lib_extMgm::insertModuleFunction(
		'web_txpbsurveyM1',
		'tx_pbsurveystatistics_modfunc5',
		t3lib_extMgm::extPath($_EXTKEY).'modfunc5/class.tx_pbsurveystatistics_modfunc5.php',
		'LLL:EXT:pbsurveystatistics/lang/locallang_modfunc5.xml:moduleFunction'
		,'wiz'
	);
	t3lib_extMgm::insertModuleFunction(
		'web_txpbsurveyM1',
		'tx_pbsurveystatistics_modfunc6',
		t3lib_extMgm::extPath($_EXTKEY).'modfunc6/class.tx_pbsurveystatistics_modfunc6.php',
		'LLL:EXT:pbsurveystatistics/lang/locallang_modfunc6.xml:moduleFunction'
		,'wiz'
	);
	t3lib_extMgm::insertModuleFunction(
		'web_txpbsurveyM1',
		'tx_pbsurveystatistics_modfunc7',
		t3lib_extMgm::extPath($_EXTKEY).'modfunc7/class.tx_pbsurveystatistics_modfunc7.php',
		'LLL:EXT:pbsurveystatistics/lang/locallang_modfunc7.xml:moduleFunction'
		,'wiz'
	);
}
t3lib_extMgm::addLLrefForTCAdescr('_MOD_web_txpbsurveyM2','EXT:pbsurveystatistics/csh/locallang_modfunc1.xml');
?>
