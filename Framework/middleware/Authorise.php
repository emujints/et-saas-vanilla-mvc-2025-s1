<?php

namespace Framework\middleware;

class Authorise
{
    public static function check()
    {
        return true;
    }

    public function isAuthenticated()
    {
        return Session::has('user');
    }

    public function handle($role)
    {
        if ($role === 'guest' && $this->isAuthenticated()) {
            return redirect('/');
        }

        if ($role === 'auth' && !$this->isAuthenticated()) {
            return redirect('/auth/login');
        }
    }
}