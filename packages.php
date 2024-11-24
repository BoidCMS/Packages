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
    'preview' => true,
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
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
    'preview' => true,
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php',
      'src/Akismet.php'
    ]
  ),
*/

  array(
    'type' => 'plugin',
    'slug' => 'api',
    'name' => 'API',
    'description' => 'A RESTful API for Your Website',
    'website' => 'https://boidcms.github.io/#/plugins/api',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Dev, AJAX',
    'license' => 'MIT',
    'preview' => true,
    'version' => array(
      'tag' => '0.2.1',
      'security' => true,
      'compatible' => '*',
      'changelog' => 'Sensitive data exposed via API'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  /*
  array(
    'type' => 'plugin',
    'slug' => 'backup',
    'name' => 'Backup',
    'description' => 'Easily Create and Schedule Automated Backups',
    'website' => 'https://boidcms.github.io/#/plugins/backup',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Data, Security',
    'license' => 'MIT',
    'preview' => true,
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
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
    'slug' => 'cache',
    'name' => 'Cache',
    'description' => 'Serve Static Cache of Pages',
    'website' => 'https://boidcms.github.io/#/plugins/cache',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Fast, Speed',
    'license' => 'MIT',
    'preview' => true,
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
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
    'preview' => true,
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),*/

  array(
    'type' => 'plugin',
    'slug' => 'cron',
    'name' => 'CRON',
    'description' => 'Web-Based Task Scheduler',
    'website' => 'https://boidcms.github.io/#/plugins/cron',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Dev, Automation, Workflow',
    'license' => 'MIT',
    'preview' => true,
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  /*array(
    'type' => 'plugin',
    'slug' => 'disqus',
    'name' => 'Disqus',
    'description' => 'Disqus Commenting System Integration',
    'website' => 'https://boidcms.github.io/#/plugins/disqus',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Comments',
    'license' => 'MIT',
    'preview' => true,
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
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
    'description' => 'Pages Automated Publishing',
    'website' => 'https://boidcms.github.io/#/plugins/draft',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Task, Workflow',
    'license' => 'MIT',
    'preview' => true,
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  array(
    'type' => 'plugin',
    'slug' => 'feed',
    'name' => 'Feed',
    'description' => 'RSS Feed Generator',
    'website' => 'https://boidcms.github.io/#/plugins/feed',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'RSS, XML',
    'license' => 'MIT',
    'preview' => true,
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),
  */

  array(
    'type' => 'plugin',
    'slug' => 'markdown-editor',
    'name' => 'Markdown Editor',
    'description' => 'Content Formatting Using Markdown Syntax',
    'website' => 'https://boidcms.github.io/#/plugins/markdown-editor',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'WYSIWYG',
    'license' => 'MIT',
    'preview' => true,
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
    ),
    'dependencies' => array(),
    'files' => null
  ),

  /*
  array(
    'type' => 'plugin',
    'slug' => 'menu',
    'name' => 'Menu',
    'description' => 'Customizable Menu Builder',
    'website' => 'https://boidcms.github.io/#/plugins/menu',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Navigation, Bar',
    'license' => 'MIT',
    'preview' => true,
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),
  */

  array(
    'type' => 'plugin',
    'slug' => 'modules',
    'name' => 'Modules',
    'description' => 'One-Click Downloads for Themes and Plugins',
    'website' => 'https://boidcms.github.io/#/plugins/modules',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Manager',
    'license' => 'MIT',
    'preview' => true,
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
    ),
    'dependencies' => array(
      [
        'type' => 'plugin',
        'slug' => 'cron'
      ]
    ),
    'files' => [
      'plugin.php'
    ]
  ),

  array(
    'type' => 'plugin',
    'slug' => 'order-by',
    'name' => 'Order By',
    'description' => 'Effortlessly Organize Your Post Order',
    'website' => 'https://boidcms.github.io/#/plugins/order-by',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Blog, List, Sort, Arrange',
    'license' => 'MIT',
    'preview' => true,
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  /*
  array(
    'type' => 'plugin',
    'slug' => 'splitdb',
    'name' => 'SplitDB',
    'description' => 'The Solution for Bigger and Better Websites',
    'website' => 'https://boidcms.github.io/#/plugins/splitdb',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Dev, Storage, Database, Table, Row',
    'license' => 'MIT',
    'preview' => true,
    'version' => array(
      'tag' => '0.1.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
    ),
    'dependencies' => array(),
    'files' => null
  ),*/

  array(
    'type' => 'plugin',
    'slug' => 'trumbowyg',
    'name' => 'Trumbowyg',
    'description' => 'Trumbowyg WYSIWYG Editor Integration',
    'website' => 'https://boidcms.github.io/#/plugins/trumbowyg',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => '',
    'license' => 'MIT',
    'preview' => true,
    'version' => array(
      'tag' => '1.0.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
    ),
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  ),

  /*array(
    'type' => 'theme',
    'slug' => 'visual',
    'name' => 'Visual',
    'description' => 'Former Default Theme BoidCMS',
    'website' => 'https://boidcms.github.io/#/themes/visual',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Old, Simple, Blog',
    'license' => 'MIT',
    'preview' => true,
    'version' => array(
      'tag' => '1.0.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
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
    'preview' => true,
    'version' => array(
      'tag' => '1.0.0',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
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
    'slug' => 'nimble',
    'name' => 'Nimble (Default Theme)',
    'description' => 'Unleash the Power of Simplicity',
    'website' => 'https://boidcms.github.io/#/themes/nimble',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Dev, Dark, Simple, Semantic',
    'license' => 'MIT',
    'preview' => true,
    'version' => array(
      'tag' => '0.1.1',
      'security' => false,
      'compatible' => '*',
      'changelog' => 'Initial release'
    ),
    'dependencies' => array(),
    'files' => [
      'blog.php',
      'home.php',
      'post.php'
    ]
  )
  */

);

return json_encode( $packages );
