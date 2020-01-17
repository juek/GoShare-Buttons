<?php
defined('is_running') or die('Not an entry point...');

class TSgoShare{

  /**
   * Typesetter action hook
   */
  public static function GetHead(){
    global $page, $addonRelativeCode;
    $page->css_admin[]  = $addonRelativeCode . '/goshare.css';
    $page->head_js[]    = $addonRelativeCode . '/goshare.js';
    $page->jQueryCode .= '$("#gpx_content").goshare();';
  }

}
