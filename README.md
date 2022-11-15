# Craft CMS Netlify Deploy Button Plugin for Craft CMS 4

*Basic* plugin to add a button to deploy to Netlify and show the status badge.

## Requirements

This plugin requires Craft CMS 4.2.0 or later.

## Installation

To install the plugin, follow these instructions.

```bash
ddev composer require wearelucid/craft-netlify-deploy
ddev php craft install netlify-deploy
```

Add environment variables to your `.env` file:

```bash
# Netlify Deploy Button Settings
# NETLIFY_HOOK_URL=https://api.netlify.com/build_hooks/SOME_HOOK_ID
# NETLIFY_BADGE_URL=https://api.netlify.com/api/v1/badges/SOME_BADGE_ID/deploy-status
```

Brought to you by [Lucid](https://www.wearelucid.ch)
