<?php
/*-------------------------------------------------------+
| SYSTOPIA Donation Receipts Extension                   |
| Copyright (C) 2013-2016 SYSTOPIA                       |
| Author: Luciano Spiegel                                |
| http://www.ixiam.com/                                  |
+--------------------------------------------------------+
| License: AGPLv3, see LICENSE file                      |
+--------------------------------------------------------*/

/**
 * This class holds helper functions
 */
class CRM_Utils_DonrecLang
{
  static function &factory($lang, $params = array())
  {
    $lang = self::ucwords($lang);
    $class = 'CRM_Utils_Lang_' . $lang;
    if (class_exists($class)) {
      return new $class($params);
    } else {
      CRM_Core_Error::fatal(ts('Unable to find class for lang ' . $lang, array('domain' => 'de.systopia.donrec')));
      return null;
    }
  }

  /**
   * Workaround for older version of PHP
   *
   * @param $lang
   *
   * @return string
   */
  private static function ucwords($lang) {
    $delimiter = '_';
    $tab = explode($delimiter, strtolower($lang));
    foreach ($tab as $k => $t) {
      $tab[$k] = ucwords($t);
    }
    return implode($delimiter, $tab);
  }

}
