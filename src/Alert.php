<?php

namespace Errehub\LaravelAlert;

class Alert
{
    public function success(string $message): string
    {
        return view('alert::alerts.success', ['message' => $message])->render();
    }

    public function error(string $message): string
    {
        return view('alert::alerts.error', ['message' => $message])->render();
    }

    public function info(string $message): string
    {
        return view('alert::alerts.info', ['message' => $message])->render();
    }

    public function warning(string $message): string
    {
        return view('alert::alerts.warning', ['message' => $message])->render();
    }
}
