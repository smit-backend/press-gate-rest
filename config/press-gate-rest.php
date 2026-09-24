<?php

return [
    'enabled' => env('PRESS_GATE_REST_ENABLED', true),
    'timeout' => env('PRESS_GATE_REST_TIMEOUT', 30),
    'log_channel' => env('PRESS_GATE_REST_LOG', 'stack'),
];
