<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'test@example.com')->first();

        $user->settings()->create([
            'theme' => 'dark',
            'lang' => 'fr',
        ]);
    }
}
