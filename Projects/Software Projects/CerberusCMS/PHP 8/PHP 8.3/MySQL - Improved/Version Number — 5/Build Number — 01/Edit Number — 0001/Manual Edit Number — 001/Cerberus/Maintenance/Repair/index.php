<?php
/*
 ============================================================================================================
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + Cerberus Content Management System
 + ----------------------------------------------------------------------------------------------------------
 + - Author			 : Gary Christopher Johnson of Oildale and Los Angeles In Southern California
 + - Company			 : CerberusCMS, Free and Open Source Software
 + - Company Address		 : Oildale In Southern California, United States of America
 + - Electronic Mail Address	 : CerberusCMS5@Proton.me
 + - Document Notes		 : View this file in a non-formatting text editor without word-wrap for the
 +				 : correct display of this programming code and its indentation.
 + ----------------------------------------------------------------------------------------------------------
 +    ()    () - -
 +  ()  () ()()()()
 +  ------
 + Index Application
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Root Directory => Maintenance => Repair => index.php
 + - This File, Version		 : 0.7.4
 + - This File, Programming Code : Pure Pre-Hyper-Text-Post-Processor
 + - Programming Code Model	 : Procedural, Functional, Object Oriented :: Pre-Order Algebraic
 + -				 :					   :: Pre-Order Logical
 + - Compatibility		 : Extensible-Markup-Language		   :: Version Numbers: 1, 1.1
 + - Compatibility		 : Hyper-Text-Markup-Language		   :: Version Numbers: 1, 2, 3, 4, 5
 + - Compatibility		 : Pre-Hyper-Text-Post-Processor 	   :: Version Numbers: 5, 7, 8
 + - Compatibility		 : Zend Engine				   :: Version Numbers: 3, 4
 + - Official Release Date	 : Friday, September 13th of 2024
 + ----------------------------------------------------------------------------------------------------------
 + -------------------------------------------------------------------------------      - Hades -
 + --[][]--[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[][][]------------   []++++||=======>
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |'-._/\_.-'|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |    []    |
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |___-[]-___|
 + -[]-----[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[]----------------    |__((**))__|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    \   -[]-   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]------------/-\-     \   []   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]---VERSION--|5|-	\  []  /
 + --[][]--[][][]--[]--[]--[][][]---[][][]--[]--[]--[][][]--[][][]------------\-/-	 '.[].'
 + -------------------------------------------------------------------------------
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Build Number: 01 ~ Final
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Edit Number : 0,001
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 +
 + [ ^ ] Directory Master Index
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + [ @ ] Directory Master Index :: Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Directory Master Index :: Variables :: Directory Listing Denial File
 ============================================================================================================
*/

$_DIRECTORY_FILE_DENIAL					= "../../System/Default/Messages/Directory_Denial.php";

/*
 ============================================================================================================
 + Directory Listing Denial: IF Directory Denial File Exists, Include It
 ============================================================================================================
*/

if (file_exists("$_DIRECTORY_FILE_DENIAL")) {

	include_once "$_DIRECTORY_FILE_DENIAL";

} else {

	echo ("Kernel Message: Missing Path: $_DIRECTORY_FILE_DENIAL");

} // [ + ] IF: File Exists: Directory Denial Index File: Redirect To Master Directory Index Listing Denial File
?>