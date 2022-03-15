<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',   
            'password' => Hash::make('123456789'),
            'birthday' => '1999-01-01',
            'start_work' => date('Y-m-d',strtotime("yesterday")),
            'is_first_login' => false,
            'department_id' => 1,
            'is_admin' => true,
            'is_manager' => true,
            'status' => true
        ]);
    }
}
