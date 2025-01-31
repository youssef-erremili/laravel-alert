<?php

namespace Errehub\LaravelAlert;

use Illuminate\Support\Facades\Session;

class Alert
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
        echo view('alert::alerts.success')->render();
    }


    /**
     * Flash an error message to the session and return the rendered error view.
     *
     * @param string $message
     * @return string
     */
    public function error(string $message): void
    {
        Session::flash('alert_message', $message);
        echo view('alert::alerts.error')->render();
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
        echo view('alert::alerts.info')->render();
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
        echo view('alert::alerts.warning')->render();
    }
}
