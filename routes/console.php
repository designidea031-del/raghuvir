<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('admin:reset {password=admin}', function ($password = 'admin') {
    $user = \App\Models\User::where('role', 'admin')->orWhere('is_admin', true)->first();
    if (!$user) {
        $user = \App\Models\User::first();
    }
    if ($user) {
        $user->password = \Illuminate\Support\Facades\Hash::make($password);
        $user->save();
        $this->info("Admin password for {$user->email} successfully reset to: {$password}");
    } else {
        $this->error("No user found in database!");
    }
})->purpose('Reset admin user password');
