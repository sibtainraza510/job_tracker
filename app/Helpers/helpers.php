<?php

if (! function_exists('flashSuccess')) {

    function flashSuccess(string $message): void
    {
        session()->flash('success', $message);
    }
}

if (! function_exists('flashError')) {

    function flashError(string $message): void
    {
        session()->flash('error', $message);
    }
}