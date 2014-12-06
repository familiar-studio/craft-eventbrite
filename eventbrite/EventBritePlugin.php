<?php
namespace Craft;

class EventBritePlugin extends BasePlugin
{

  /* --------------------------------------------------------------
   * PLUGIN INFO
   * ------------------------------------------------------------ */

  public function getName()
  {
    return Craft::t('EventBrite');
  }

  public function getVersion()
  {
    return '0.1';
  }

  public function getDeveloper()
  {
    return 'Familiar';
  }

  public function getDeveloperUrl()
  {
    return 'http://familiar.is';
  }


  protected function defineSettings()
  {
      return array(
          'token' => array(AttributeType::String),
      );
  }

  public function getSettingsHtml()
    {
       return craft()->templates->render('eventbrite/settings', array(
           'settings' => $this->getSettings()
       ));
   }

  /* --------------------------------------------------------------
   * HOOKS
   * ------------------------------------------------------------ */

  /**
   * Load the TruncateTwigExtension class from our ./twigextensions
   * directory and return the extension into the template layer
   */
  // public function addTwigExtension()
  // {
  //   Craft::import('plugins.jsonexpand.twigextensions.JsonExpandTwigExtension');
  //   return new JsonExpandTwigExtension();
  // }
  //
  // public function init() {
  //   craft()->log->removeRoute('WebLogRoute');
  //   craft()->log->removeRoute('ProfileLogRoute');
  //   parent::init();
  // }

}
