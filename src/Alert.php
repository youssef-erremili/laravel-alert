<?php

namespace Errehub\LaravelAlert;

use Illuminate\Support\Facades\Session;

final class Alert
{

    /**
     * Flash a success message to the session and render the success view.
     *
     * @param string $message
     * @return void
     */
    public function success(string $message): void
    {
        Session::flash('alert_message', $message);
        Session::flash('alert_type', 'success');
    }


    /**
     * Flash an error message to the session and return the rendered error view.
     *
     * @param string $message
     * @return void
     */
    public function error(string $message): void
    {
        Session::flash('alert_message', $message);
        Session::flash('alert_type', 'error');
    }


    /**
     * Flash an info message to the session and render the info view.
     *
     * @param string $message
     * @return void
     */
    public function info(string $message): void
    {
        Session::flash('alert_message', $message);
        Session::flash('alert_type', 'info');
    }


    /**
     * Flash a warning message to the session and render the warning view.
     *
     * @param string $message
     * @return void
     */
    public function warning(string $message): void
    {
        Session::flash('alert_message', $message);
        Session::flash('alert_type', 'warning');
    }
}
