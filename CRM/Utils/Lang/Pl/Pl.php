<?php
/*-------------------------------------------------------+
| SYSTOPIA Donation Receipts Extension                   |
| Copyright (C) 2013-2018 SYSTOPIA                       |
| Author: Tomasz "Scardinius" Pietrzkowski               |
| http://www.caltha.pl                                   |
+--------------------------------------------------------+
| License: AGPLv3, see LICENSE file                      |
+--------------------------------------------------------*/

require_once 'Kwota.php';

/**
 * This class holds Polish language helper functions
 */
class CRM_Utils_Lang_Pl_Pl {

  /**
   * @param $number
   *
   * @return string
   * @throws \Exception
   */
  static public function toWords($number) {
    return Kwota::getInstance()->slownie($number);
  }

}
