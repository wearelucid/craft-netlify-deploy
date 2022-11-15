<?php
namespace wearelucid\netlifydeploy;

use wearelucid\netlifydeploy\models\SettingsModel;

use craft\events\RegisterComponentTypesEvent;
use craft\services\Dashboard;
use yii\base\Event;

// NetlifyDeploy = PluginHandle
class NetlifyDeploy extends \craft\base\Plugin
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
  //   return \Craft::$app->getView()->renderTemplate('netlify-deploy/_settings', [
  //     'settings' => $this->getSettings()
  //   ]);
  // }
}
