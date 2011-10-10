<?php

/**
 * generate actions.
 *
 * @package    image-monkey
 * @subpackage generate
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class generateActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

      $filename = urldecode( $request->getParameter("url") );
      //$filename = "/Users/robbymillsap/Sites/eventflo.dev/web/images/myface.jpg";
      $handle   = fopen($filename, "r");

      header("Content-Type: image/jpeg");

       while ( $cline = fgets($handle) ){
            print $cline;
       }
       fclose($handle);

      return sfView::NONE;
  }
}
