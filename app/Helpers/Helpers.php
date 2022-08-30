<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('authUser')) {
    function authUser()
    {
        if (Auth::check()) {
            $user = Auth::getUser();
        } else {
            $user = null;
        }
        return $user;
    }
}

if (!function_exists('authId')) {
    function authId(): int
    {
        if (Auth::check()) {
            $user = Auth::getUser()->id;
        } else {
            $user = 0;
        }
        return $user;
    }
}

if (!function_exists('getUserRole')) {
    function getUserRole(): string
    {
        if (Auth::check()) {
            $role = Auth::user()->roles->pluck('name')->first();
        } else {
            $role = 0;
        }
        return $role;
    }
}

?>