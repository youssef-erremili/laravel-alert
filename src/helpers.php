<?php

use Errehub\LaravelAlert\Alert;

function alert_success(string $message)
{
    return app('alert')->success($message);
}

function alert_error(string $message)
{
    return app('alert')->error($message);
}

function alert_info(string $message)
{
    return app('alert')->info($message);
}

function alert_warning(string $message)
{
    return app('alert')->warning($message);
}
