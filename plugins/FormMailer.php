<?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;

final class FormMailer extends AbstractPicoPlugin
{
  /**
   * @see AbstractPicoPlugin::$enabled
   * @var boolean
   */
  protected $enabled = true;

  /**
   * @see AbstractPicoPlugin::$dependsOn
   * @var string[]
   */
  protected $dependsOn = array();


  public function onRequestUrl(&$url)
  {

      print '<p>';
      print $_SERVER['REQUEST_METHOD'];
      print $_POST['name'];
      print $_POST['email'];
      print $_POST['message'];
      print '</p>';


      if($_SERVER['REQUEST_METHOD'] == 'POST'){

      }

      // your code
  }

}
