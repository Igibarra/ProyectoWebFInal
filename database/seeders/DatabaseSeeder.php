<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User; 
        $user->name ='Admin';
        $user->email ='Admin@gmail.com';
        $user->password = '1234';
        $user->role = 'admin';
        $user->save();
    }
}
