<?php
//.env.development.php
//.env.php (production)

return [
    'db' => [
        'host' => 'example-host',
        'database' => 'example-database',
        'username' => 'example-username',
        'password' => 'example-password',
    ],
    'stripe' => [
        'api_key' => 'example-api-key',
        'api_token' => 'example-api-token'
    ],
    'queue' => [
        'connections' => 'iron',
        'host'    => 'example-mq-aws-us-east-1.iron.io',
        'token'   => 'example-your-token',
        'project' => 'example-your-project-id',
        'queue'   => 'example-your-queue-name',
    ]
];
