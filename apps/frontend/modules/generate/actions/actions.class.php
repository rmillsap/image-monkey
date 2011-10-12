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
      // Download the image
      $url           = $request->getParameter( "url" );
      $remote_file   = $url; //urldecode( $url );

      //$remote_file   = "/Users/robbymillsap/Sites/eventflo.dev/web/images/myface.jpg";

      $remote_handle = fopen($remote_file, "r");
      $temp          = tempnam(sfConfig::get('sf_upload_dir'), 'Img') . '.jpg';

      $temp_handle   = fopen($temp, "w");

      while ( $cline = fgets($remote_handle) ){
          fwrite( $temp_handle, $cline );
      }
      
      fclose( $temp_handle   );
      fclose( $remote_handle );

      

      //$url_to_tmp = realpath(dirname($temp));

      // Process the image
      /*
      $path = sfConfig::get('sf_upload_dir') . '/';
      $src  = "myface.jpg";
      $new  = "myface.jpg";
       *
       */

      // Run image magick

      $cmd = "convert $temp -resize " . $request->getParameter("size") . " " . $temp;

      shell_exec( $cmd );

      // show image
      $this->showImage( $temp );

      shell_exec( "rm $temp");

      return sfView::NONE;
  }

  private function showImage( $url ) {
      $filename = $url;
      //$filename = "/Users/robbymillsap/Sites/eventflo.dev/web/images/myface.jpg";
      $handle   = fopen($filename, "r");

      header("Content-Type: image/jpeg");

       while ( $cline = fgets($handle) ){
            print $cline;
       }
       fclose($handle);
  }


}
