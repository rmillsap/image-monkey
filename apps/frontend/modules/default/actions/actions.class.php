<?php

/**
 * default actions.
 *
 * @package    image-monkey
 * @subpackage default
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class defaultActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   
  }

  public function executeBuild(sfWebRequest $request)
  {
    if(!$request->isMethod("post")) return;

    $this->new_url = "http://imgmky.com/gen?key="
            . $request->getParameter("key") . '&url='
            . urlencode($request->getParameter("url")) . '&size='
            . $request->getParameter("size");
  }
}
