<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(env('APP_ENV') !== 'production' && User::where('email', 'user@test.com')->count() <= 0){
            User::factory(1)->create(
                [
                    'name' => 'Test User',
                    'email' => 'user@test.com',
                    'password' => Hash::make('secret')
                ]
            );
        }
    }
}
