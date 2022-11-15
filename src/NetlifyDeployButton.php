<?php
namespace wearelucid\netlifydeploybutton;

use wearelucid\netlifydeploybutton\models\SettingsModel;

use craft\events\RegisterComponentTypesEvent;
use craft\services\Dashboard;
use yii\base\Event;

// NetlifyDeployButton = PluginHandle
class NetlifyDeployButton extends \craft\base\Plugin
{
  public bool $hasCpSection = true;

  // Set settings page in control panel
  public bool $hasCpSettings = false;

  protected function createSettingsModel(): ?\craft\base\Model
  {
    return new SettingsModel();
  }

  // Define Settings page
  // protected function settingsHtml()
  // {
  //   return \Craft::$app->getView()->renderTemplate('netlify-deploy-button/_settings', [
  //     'settings' => $this->getSettings()
  //   ]);
  // }
}
