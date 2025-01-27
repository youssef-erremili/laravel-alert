<?php

use YoussefErremili\Alert\Alert;

function alert_success(string $message): string
{
    return app('alert')->success($message);
}

function alert_error(string $message): string
{
    return app('alert')->error($message);
}

function alert_info(string $message): string
{
    return app('alert')->info($message);
}

function alert_warning(string $message): string
{
    return app('alert')->warning($message);
}
