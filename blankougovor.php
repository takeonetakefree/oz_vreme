<?php
/* $Id$ */
/**
*
* @author         $Author$
* @version        $Revision$
* @lastrevision   $Date$
* @modifiedby     $LastChangedBy$
* @lastmodified   $LastChangedDate$
*
*/
/**
*
* EDOTPLUS 
*
* @project      EZADRUGA web portal
* @copyright    (C)2011 by Srđan Petrović@edotplus. All rights reserved.
* @license      Edotplus applications are not free software. For usage, distribution, using,
*               changing or copying any part of the code you need to have exclusive permission
*               by Srdjan Petrovic. Any violation of those rules will be considered as
*               intellectual property theft!
*
* @file         blankougovor.php
* @package       
* @subpackage   
*
* @description  Redirect to Blanko Ugovor
*
* @history      12.11.2011. ; srdjanp ; Initial revision
*
*/
include_once('./header.php');
?>
              <!-- MAIN CONTENT START -->
              <h2><?=$GLOBALS["sectiontitle"];?></h2>
              <a href="./pdfblugovor.php" target="_blank"><img src="./images/form/pdf_big.jpg" alt="Štampa ugovora" title="Štampa ugovora" /></a>
              <!-- MAIN CONTENT END -->
<?php include_once('./footer.php'); ?>
