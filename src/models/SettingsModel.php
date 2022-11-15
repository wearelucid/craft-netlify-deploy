<?php
namespace wearelucid\netlifydeploybutton\models;

use craft\base\Model;
use craft\helpers\App;

class SettingsModel extends Model
{
    public function getHookUrl(): string {
        return App::env('NETLIFY_HOOK_URL') ?? '';
    }
    public function getBadgeUrl(): string {
        return App::env('NETLIFY_BADGE_URL') ?? '';
    }
}
