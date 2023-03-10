<?php

return [
  'driver' => 'database', //-  env('SITE_DRIVER', 'file'),

  'cache' => false,

  'class' => \Neon\Site\Models\Site::class,

  'hosts' => [
    env('SITE_ID') => [
      'domains' => []
    ],
    'dev' => [
      'domains' => ['elementary-interactive.dev']
    ],
    'local' => [
      'domains' => ['local.dev', 'local.loc'],
      'local'   => 'en',
      'default' => true
    ]
  ]
];