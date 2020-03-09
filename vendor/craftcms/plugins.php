<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'craftcms/commerce' => 
  array (
    'class' => 'craft\\commerce\\Plugin',
    'basePath' => $vendorDir . '/craftcms/commerce/src',
    'handle' => 'commerce',
    'aliases' => 
    array (
      '@craft/commerce' => $vendorDir . '/craftcms/commerce/src',
      '@craftcommercetests/fixtures' => $vendorDir . '/craftcms/commerce/tests/fixtures',
    ),
    'name' => 'Craft Commerce',
    'version' => '3.0.11',
    'description' => 'An amazingly powerful and flexible e-commerce platform for Craft CMS.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://craftcommerce.com',
    'documentationUrl' => 'https://docs.craftcms.com/commerce/v2/',
  ),
  'verbb/events' => 
  array (
    'class' => 'verbb\\events\\Events',
    'basePath' => $vendorDir . '/verbb/events/src',
    'handle' => 'events',
    'aliases' => 
    array (
      '@verbb/events' => $vendorDir . '/verbb/events/src',
    ),
    'name' => 'Events',
    'version' => '1.4.3',
    'description' => 'Events is a full-featured Craft CMS Plugin for event management and ticketing. Events integrates with Craft Commerce so you can easily sell tickets to your events.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/events/craft-3/CHANGELOG.md',
  ),
  'kuriousagency/commerce-bundles' => 
  array (
    'class' => 'kuriousagency\\commerce\\bundles\\Bundles',
    'basePath' => $vendorDir . '/kuriousagency/commerce-bundles/src',
    'handle' => 'commerce-bundles',
    'aliases' => 
    array (
      '@kuriousagency/commerce/bundles' => $vendorDir . '/kuriousagency/commerce-bundles/src',
    ),
    'name' => 'Bundles',
    'version' => '1.1.2',
    'description' => 'Bundles plugin for Craft Commerce',
    'developer' => 'Kurious Agency',
    'developerUrl' => 'https://kurious.agency',
    'changelogUrl' => 'https://raw.githubusercontent.com/KuriousAgency/commerce-bundles/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => true,
    'components' => 
    array (
      'bundlesService' => 'kuriousagency\\commerce\\bundles\\services\\BundlesService',
    ),
  ),
);
