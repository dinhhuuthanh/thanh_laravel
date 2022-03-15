<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;



class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Department::create([
            'name' => 'Phòng Tài Chính',
            'description' => 'Đấy là phòng tài chính'
        ]);
    }
}
