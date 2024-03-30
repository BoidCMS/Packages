<?php


$modules = array(

  array(
    'type' => 'theme',
    'slug' => 'nimble',
    'name' => 'Nimble',
    'descr' => 'Unleash the Power of Simplicity',
    'website' => 'https://boidcms.github.io/#/themes/nimble',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Dev, Simple, Fast',
    'compatible' => '*',
    'version' => '0.1.0',
    'license' => 'MIT',
    'preview' => true,
    'dependencies' => array(),
    'files' => [
      'theme.php',
      'blog.php'
    ]
  ),

  array(
    'type' => 'plugin',
    'slug' => 'api',
    'name' => 'API',
    'descr' => 'A RESTful API for Your Website',
    'website' => 'https://boidcms.github.io/#/plugins/api',
    'author' => 'Shuaib Yusuf Shuaib',
    'keywords' => 'Dev, RESTful, API',
    'compatible' => '*',
    'version' => '0.1.1',
    'license' => 'MIT',
    'preview' => false,
    'dependencies' => array(),
    'files' => [
      'plugin.php'
    ]
  )

);

return json_encode( $modules );
