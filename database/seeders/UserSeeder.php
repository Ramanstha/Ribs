<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserLogin;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserLogin::create([
            'name'=>'RIBS',
            'email'=>'ribs@gmail.com',
            'password'=>Hash::make('ribs12345'),
           ]);
    }
}
