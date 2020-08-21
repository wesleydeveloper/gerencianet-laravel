<?php
return [
    'client_id' => env('GN_CLIENT_ID', 'your-client-id'),
    'client_secret' => env('GN_CLIENT_SECRET', 'your-client-secret'),
    'sandbox' => env('GN_SANDBOX', false), // false = production
    'timeout' => env('GN_TIMEOUT', 30),
];
