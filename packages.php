<?php

$packages = array(

  array(
    'type' => 'plugin',
    'slug' => 'amp',
    'name' => 'AMP (Accelerated Mobile Pages)',
    'description' => 'AMP Plugin for Lightning-Fast Performance',
    'website' => 'https://boidcms.github.io/#/plugins/amp',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Google, Speed',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/plugin/amp/preview.png',
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/plugin/amp/0.1.0.zip'
    ),
    'dependencies' => array(),
    'files' => null
  ),

/*
  array(
    'type' => 'plugin',
    'slug' => 'antispam',
    'name' => 'Anti–Spam',
    'description' => 'Seamlessly Integrate Akismet with Anti-Spam Plugin',
    'website' => 'https://boidcms.github.io/#/plugins/antispam',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Dev, Security',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/plugin/antispam/preview.png',
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/plugin/antispam/0.1.0.zip'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php',
      'src/Akismet.php'
    ]
  ),

  array(
    'type' => 'plugin',
    'slug' => 'api',
    'name' => 'API',
    'description' => 'A RESTful API for Your Website',
    'website' => 'https://boidcms.github.io/#/plugins/api',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Dev, AJAX',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/plugin/api/preview.png',
    'version' => array(
      'tag' => '0.2.0',
      'security' => true,
      'compatible' => '*',
      'changelog' => 'Sensitive data exposed via API',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/plugin/api/0.2.0.zip'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  array(
    'type' => 'plugin',
    'slug' => 'backup',
    'name' => 'Backup',
    'description' => 'Easily Create and Schedule Automated Backups',
    'website' => 'https://boidcms.github.io/#/plugins/backup',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Data, Security',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/plugin/backup/preview.png',
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/plugin/backup/0.1.0.zip'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  array(
    'type' => 'plugin',
    'slug' => 'cache',
    'name' => 'Cache',
    'description' => 'Serve Static Cache of Pages',
    'website' => 'https://boidcms.github.io/#/plugins/cache',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Fast, Speed',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/plugin/cache/preview.png',
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/plugin/cache/0.1.0.zip'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  array(
    'type' => 'plugin',
    'slug' => 'contact',
    'name' => 'Contact',
    'description' => 'Easily Create and Customize Contact Forms With Flexible Templates',
    'website' => 'https://boidcms.github.io/#/plugins/contact',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => '',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/plugin/contact/preview.png',
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/plugin/contact/0.1.0.zip'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  array(
    'type' => 'plugin',
    'slug' => 'cron',
    'name' => 'CRON',
    'description' => 'Web-Based Task Scheduler',
    'website' => 'https://boidcms.github.io/#/plugins/cron',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Dev, Automation, Workflow',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/plugin/cron/preview.png',
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/plugin/cron/0.1.0.zip'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  array(
    'type' => 'plugin',
    'slug' => 'disqus',
    'name' => 'Disqus',
    'description' => '',
    'website' => 'https://boidcms.github.io/#/plugins/disqus',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Comments',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/plugin/disqus/preview.png',
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/plugin/disqus/0.1.0.zip'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  array(
    'type' => 'plugin',
    'slug' => 'draft',
    'name' => 'Draft',
    'description' => '',
    'website' => 'https://boidcms.github.io/#/plugins/draft',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Task, Workflow',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/plugin/draft/preview.png',
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/plugin/draft/0.1.0.zip'
    ),
    'dependencies' => array(
      [
        'type' => 'plugin',
        'slug' => 'cron',
        'name' => 'Plugin: CRON (cron)'
      ]
    ),
    'files' => [
      'plugin.php'
    ]
  ),

  array(
    'type' => 'plugin',
    'slug' => 'feed',
    'name' => 'Feed',
    'description' => 'XML Feed',
    'website' => 'https://boidcms.github.io/#/plugins/feed',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'RSS',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/plugin/feed/preview.png',
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/plugin/feed/0.1.0.zip'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  array(
    'type' => 'plugin',
    'slug' => 'menu',
    'name' => 'Menu',
    'description' => '',
    'website' => 'https://boidcms.github.io/#/plugins/menu',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => '',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/plugin/menu/preview.png',
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/plugin/menu/0.1.0.zip'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  array(
    'type' => 'plugin',
    'slug' => 'modules',
    'name' => 'Modules',
    'description' => 'One-Click Downloads for Themes and Plugins',
    'website' => 'https://boidcms.github.io/#/plugins/modules',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Manager',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/plugin/modules/preview.png',
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/plugin/modules/0.1.0.zip'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  array(
    'type' => 'plugin',
    'slug' => 'order-by',
    'name' => 'Order By',
    'description' => '',
    'website' => 'https://boidcms.github.io/#/plugins/order-by',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => '',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/plugin/order-by/preview.png',
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/plugin/order-by/0.1.0.zip'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  array(
    'type' => 'plugin',
    'slug' => 'splitdb',
    'name' => 'SplitDB',
    'description' => 'The Solution for Bigger and Better Websites',
    'website' => 'https://boidcms.github.io/#/plugins/splitdb',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Dev, Storage, Database, Table, Row',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/plugin/splitdb/preview.png',
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/plugin/splitdb/0.1.0.zip'
    ),
    'dependencies' => array(),
    'files' => null
  ),

  array(
    'type' => 'plugin',
    'slug' => 'trumbowyg',
    'name' => 'Trumbowyg',
    'description' => '',
    'website' => 'https://boidcms.github.io/#/plugins/trumbowyg',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Editor',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/plugin/trumbowyg/preview.png',
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/plugin/trumbowyg/0.1.0.zip'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  array(
    'type' => 'theme',
    'slug' => 'visual',
    'name' => 'Visual (Ex-Default Theme)',
    'description' => 'The Original Theme for BoidCMS',
    'website' => 'https://boidcms.github.io/#/themes/visual',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Old, Simple, Blog',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/theme/visual/preview.png',
    'version' => array(
      'tag' => '1.0.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/theme/visual/1.0.0.zip'
    ),
    'dependencies' => array(),
    'files' => [
      'blog.php',
      'home.php',
      'post.php'
    ]
  ),

  array(
    'type' => 'theme',
    'slug' => 'noir',
    'name' => 'Noir',
    'description' => 'Minimalist Elegance for Your Blog',
    'website' => 'https://boidcms.github.io/#/themes/noir',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Dark, Menu, Pagination',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/theme/noir/preview.png',
    'version' => array(
      'tag' => '1.0.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/theme/noir/1.0.0.zip'
    ),
    'dependencies' => array(),
    'files' => [
      'blog.php',
      'home.php',
      'post.php'
    ]
  ),
*/
  array(
    'type' => 'theme',
    'slug' => 'nimble',
    'name' => 'Nimble (Default Theme)',
    'description' => 'Unleash the Power of Simplicity',
    'website' => 'https://boidcms.github.io/#/themes/nimble',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Dev, Dark, Simple, Semantic',
    'license' => 'MIT',
    'preview' => 'https://cdn.jsdelivr.net/gh/BoidCMS/Packages/theme/nimble/preview.png',
    'version' => array(
      'tag' => '0.1.1',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release',
      'zip' => 'https://raw.githubusercontent.com/BoidCMS/Packages/master/theme/nimble/0.1.1.zip'
    ),
    'dependencies' => array(),
    'files' => [
      'blog.php',
      'home.php',
      'post.php'
    ]
  )

);

return json_encode( $packages );
