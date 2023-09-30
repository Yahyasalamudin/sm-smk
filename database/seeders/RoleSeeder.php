<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['role' => 'Admin'],
            ['role' => 'Tata Usaha'],
            ['role' => 'Waka Kurikulum'],
            ['role' => 'Waka Sarpras'],
            ['role' => 'Pokja Kurikulum'],
            ['role' => 'Pokja Sarpras'],
            ['role' => 'Kaprogli'],
            ['role' => 'Guru'],
            ['role' => 'BK'],
            ['role' => 'CS'],
            ['role' => 'Satpam'],
        ];

        Role::insert($data);

        $user_role = [
            [
                'user_id' => 1,
                'role_id' => 1
            ],
            [
                'user_id' => 1,
                'role_id' => 8
            ],
        ];

        DB::table('user_roles')->insert($user_role);
    }
}
